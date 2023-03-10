<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Room;
use App\News;
use App\RoomType;

class AdminController extends Controller
{
    public function index() {
        $rooms = Room::all();

        return view('admin.home', [
            'title' => 'Admin Page - Room',
            'rooms' => $rooms
        ]);
    }
    
    public function add() {
        $types = RoomType::all();

        return view('admin.add', [
            'title' => 'Add Room',
            'types' => $types
        ]);
    }

    public function addRoom(Request $request) {
        $validReq = $request->validate([
            'name' => 'required',
            'room_type' => 'required',
            'price' => 'required|integer',
            'available' => 'required|integer',
            'image' => 'image|file|max:5120',
        ]);

        if (!$request->file('image')) {
            $validReq['image'] = 'no-image.jpg';
        } else {
            $validReq['image'] = $request->file('image')->store('public/room');
            $validReq['image'] = substr($validReq['image'], 12);
        }

        Room::create($validReq);

        return redirect('/admin')->with('status', 'Room created succesfully!');
    }
    
    public function edit($id) {
        $room = Room::where('id', $id)->first();
        $types = RoomType::all();

        return view('admin.edit', [
            'title' => 'Edit Room',
            'types' => $types,
            'room' => $room
        ]);
    }

    public function editRoom(Request $request) {
        $validReq = $request->validate([
            'name' => 'required',
            'room_type' => 'required',
            'price' => 'required|integer',
            'available' => 'required|integer',
        ]);

        Room::where('id', $request->id)->update($validReq);

        return redirect('/admin')->with('status', 'Room edited succesfully!');
    }
    
    public function delete($id) {
       Room::where('id', $id)->delete();

       return redirect('/admin')->with('status', 'Room deleted succesfully!');
    }

    public function news() {
        $news = News::all();

        return view('admin.news', [
            'title' => 'Admin Page - News',
            'news' => $news
        ]);
    }
    
    public function addNewsView() {
        return view('admin.addNews', [
            'title' => 'Add Room',
        ]);
    }

    public function addNews(Request $request) {
        $validReq = $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'content' => 'required',
            'image' => 'image|file|max:5120',
        ]);

        if (!$request->file('image')) {
            $validReq['image'] = 'no-image.jpg';
        } else {
            $validReq['image'] = $request->file('image')->store('public/news');
            $validReq['image'] = substr($validReq['image'], 12);
        }

        News::create($validReq);

        return redirect('/admin/news')->with('status', 'Room created succesfully!');
    }

    public function editNewsView($id) {
        $news = News::where('id', $id)->first();

        return view('admin.editNews', [
            'title' => 'Edit Room',
            'news' => $news
        ]);
    }

    public function editNews(Request $request) {
        $validReq = $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'content' => 'required',
        ]);

        News::where('id', $request->id)->update($validReq);

        return redirect('/admin/news')->with('status', 'News edited succesfully!');
    }

    public function deleteNews($id) {
       News::where('id', $id)->delete();

       return redirect('/admin/news')->with('status', 'News deleted succesfully!');
    }

    public function booking(){
        $bookings = Booking::all();
        return view ('admin.booklist', [
            'title'=> 'Booking List',
            'bookings' => $bookings
        ]);
    }

    public function accBook($id) {
        $booking = Booking::where('id', $id)->first();
        $booking->update(['status' => 1]);
        return redirect('/admin/booking')->with('status', 'Booking For '.$booking->room['name'].' by '.$booking->user['name'].' Accepted!');
    }
    public function notAccBook($id) {
        $booking = Booking::where('id', $id)->first();
        $booking->update(['status' => -1]);
        return redirect('/admin/booking')->with('status', 'Booking For '.$booking->room['name'].' by '.$booking->user['name'].' Not Accepted!');
    }
    
    public function promo($id) {
        $room = Room::where('id', $id)->first();
        return view('admin.promo', [
            'title' => 'Set Promo',
            'room' => $room
        ]);
    }

    public function promoSet(Request $request) {
        $validReq = $request->validate([
            'promo' => 'required|integer|min:0|max:100',
        ]);

        Room::where('id', $request->id)->update([
            'promo' => $validReq['promo']
        ]);

        return redirect('/admin')->with('status', 'Promo edited succesfully!');
    }
}
