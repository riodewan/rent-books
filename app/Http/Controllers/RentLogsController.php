<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Book;
use App\Models\RentLogs;
use Illuminate\Support\Facades\Session;

class RentLogsController extends Controller
{
    public function add()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('admin.rent.add', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();
        $book = Book::findOrFail($request->book_id)->only('status');
        
        //cek status buku
        if($book['status'] != 'in stok'){
            //kalo buku statusnya bukan in stok
            Session::flash('messege', 'Cannot rent, book is not available!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('rentlogs-add');
        }
    
        //kalo statusnya in stok
        else{
            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
            if($count >= 3)
            {
                Session::flash('messege', 'Cannot rent, user has a limit book!');
                Session::flash('alert-class', 'alert-danger');
                return redirect('rentlogs-add');
            }
            else{
                RentLogs::create($request->all());
                $book = Book::findOrFail($request->book_id);
                $book->status = 'not avaliable';
                $book->save();
                Session::flash('messege', 'Rent Book Successfully');
                Session::flash('alert-class', 'alert-success');
                return redirect('rentlogs-add');
            }     
        }
        
    }

    public function edit()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('admin.rent.return', ['users' => $users, 'books' => $books]);
    }

    public function update(Request $request)
    {
        $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where('actual_return_date', null);

        $rentData = $rent->first();
        $rentCount = $rent->count();
        
       if($rentCount == 1){
        //actual_return_datenya masih null
        $rentData->actual_return_date = Carbon::now()->toDateString();
        $rentData->save();
        Session::flash('messege', 'Return Book Successfully');
        Session::flash('alert-class', 'alert-success');
        return redirect('returnlogs');
       } 

       else{
        //actual_return_datenya udah ada isi (tidak null)
        Session::flash('messege', 'Return Book failed');
        Session::flash('alert-class', 'alert-danger');
        return redirect('returnlogs');
       }
    }
}
