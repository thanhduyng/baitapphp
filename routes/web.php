<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\REQUEST;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/phongban', ['as' => 'phongban', 'uses' => 'phongBanController@hienthi']);
Route::get('/them_phongban', 'phongBanController@them');
Route::post('/save_phongban', ['as' => 'save_phongban', 'uses' => 'phongBanController@save']);
Route::post('/save_phongban2', ['as' => 'save_phongban2', 'uses' => 'phongBanController@save2']);
Route::get('/sua_phongban/{id}', 'phongBanController@sua');
Route::get('/xoa_phongban/{id}', 'phongBanController@xoa');

Route::get('/chucdanh', ['as' => 'chucdanh', 'uses' => 'chucDanhController@hienthi']);
Route::get('/them_chucdanh', 'chucDanhController@them');
Route::post('/save_chucdanh', ['as' => 'save_chucdanh', 'uses' => 'chucDanhController@save']);
Route::get('/sua_chucdanh/{id}', 'chucDanhController@sua');
Route::post('/save_chucdanh2', ['as' => 'save_chucdanh2', 'uses' => 'chucDanhController@save2']);
Route::get('/xoa_chucdanh/{id}', 'chucDanhController@xoa');


Route::get('/user', ['as' => 'user', 'uses' => 'userController@hienthi']);
Route::get('/them_user', 'userController@them');
Route::post('/save_user', ['as' => 'save_user', 'uses' => 'userController@save']);
Route::get('/sua_user/{id}', 'userController@sua');
Route::post('/update_user', ['as' => 'update_user', 'uses' => 'userController@update']);
Route::get('/xoa_user/{id}', 'userController@xoa');

Route::get('/donhang', ['as' => 'donhang', 'uses' => 'donhangController@hienthi']);

Route::get('/sach', ['as' => 'sach', 'uses' => 'sachController@hienthi']);
Route::get('/them_sach', 'sachController@them');
Route::post('/save_sach', ['as' => 'save_sach', 'uses' => 'sachController@save']);
Route::get('/sua_sach/{id}', 'sachController@sua');
Route::post('/update_sach', ['as' => 'update_sach', 'uses' => 'sachController@update']);
Route::get('/xoa_sach/{id}', 'sachController@xoa');

Route::get('/phieuthuesach', ['as' => 'phieuthuesach', 'uses' => 'phieuthuesachController@hienthi']);
Route::get('/them_phieuthuesach', 'phieuthuesachController@them');
Route::post('/save_phieuthuesach', ['as' => 'save_phieuthuesach', 'uses' => 'phieuthuesachController@save']);
Route::get('/sua_phieuthuesach/{id}', 'phieuthuesachController@sua');
Route::post('/update_phieuthuesach', ['as' => 'update_phieuthuesach', 'uses' => 'phieuthuesachController@update']);
Route::get('/xoa_phieuthuesach/{id}', 'phieuthuesachController@xoa');

Route::get('manhinhthemmoi', function () {
    // echo "Đây là màn hình thêm mới";

    // lấy toàn bộ data trong table
    $userArr = DB::table("users")->get();
    // dd($userArr);
    // foreach($userArr as $item){
    //     echo $item->name;

    // }

    // lấy 1 cột 
    $data = DB::table('users')
    ->select('name')
    // ->where('id',5)
    ->get();
    // dd($data);

    //lấy dòng đầu tiên của dữ liệu
    $user = DB::table("users")->first();
    // dd($user->name)

    //order by
    $data = DB::table('users')->orderBy('id','ASC')
    ->select('name')
    ->get();
    // dd($data);

    // limit
    // skip: vị trí bắt đầu
    // take: lấy bao nhiêu phần tử
    $data = DB::table('users')
    ->skip(1)
    ->take(2)
    ->get();
    // dd($data);

    // select where between
    $data = DB::table('users')
    ->whereBetween('id',[2,4])->get();
    // dd($data);

    // select where not-between
    $data = DB::table('users')
    ->whereNotBetween('id',[2,4])->get();
    // dd($data);

    // where in
    $data = DB::table('users')
    ->whereIn('id',[2,4,5])
    ->get();
    // dd($data);

    //Lấy có where
    $userArr = DB::table("users")
        ->where("email", "=", "thanh@gmail.com")
        ->where("id", "=", 1)
        ->get();
    //dd($userArr);

    //phần điều kiện <,>,<><=<like,@@

    //Lấy, một dữ liệu theo cột(thường dùng khi cần lấy cấu hình, check quyền)
    //$name = DB::table("users")
    //->where("email","=","thanh@gmail.com")
    //->where("id","=",1)
    //->value("name");

    //Lấy dữ liệu theo id
    //    $user = DB::table("users")
    //     ->find(2);
    //     dd($user);


    // Lấy một mảng theo cột
    $userIdArr = DB::table("users")
        ->pluck("id");
    //    foreach($userIdArr as $user){
    //      echo $user->id;
    //    }
    // dd($userIdArr);

    // Lấy một mảng theo cột và có key & value, để đổ vào combobox
    $userIdNameArr = DB::table("users")
    ->pluck("name","id"); // value,key

    // dd($userIdNameArr);

    // bổ sung chucdanhid, phongbanid cho bảng user.
    //Viết màn hình cập nhập user(phân vào chức danh và phòng ban)

    // đếm số lượng record
    $countUser = DB::table("users")
    ->where('name','trọng ý')
    ->count();
    // echo $countUser;exit;

    //group by

    // $max = DB::table("migrations")->max("batch");
    // $max = DB::table("migrations")->sum("batch");
    // $max = DB::table("migrations")->avg("batch");
    // $max = DB::table("migrations")->min("batch");
    // echo $max;exit;

    // kiểm tra tồn tại
    // $exists = DB::table("migrations")->where("batch",5)->exists();
    // kiểm tra không tồn tại
    // $exists = DB::table("migrations")->where("batch",5)->doesntExist();
    // echo $exists?"tồn tại":"không tồn tại";exit;

    // Tạo bảng đơn hàng gồm(id, tên hàng, số lượng, đơn giá, thành tiền)
    // Viết chức năng in danh sách theo ngày
    // Viết chức năng in ra số tiền bán trong ngày, số đơn hàng bán trong ngày

    // $d = "20/12/2020";
    // $d = implode("-",(array_reverse(explode("/",$d))));

    // query tĩnh
    $r = DB::select("select * from users where id ?",[4]);
    // dd($r);




})
    // ->middleware("Ghilog")
    // ->middleware('Authecation')
    ->name('manhinhthemmoi');

Route::get('/khongcoquyen', function () {
    echo "Không có quyền";
})->name('khongcoquyen');


//middleware saferequest kiểm tra dữ liệu nhập lên
// tìm post hoặc get có dấu /\ hay không,
//nếu có thì bỏ uqa request đó
// foreach $_REQUEST theo key value

// Tạo các entity chức năng( ít nhất có field routename), 
// entity chucnang_user (2 field chính id_user, id_chucnang)

//thực hiện viết middlware authenticartion
// để kiểm tra quyền truy cập của một người dùng đến một router

// bổ sung entity nhomnguoidung, nguoidung_nhom, nhom_chucnang
// Một người dùng thuộc nhiều nhóm
// Một nhóm có nhiều chức năng
// Kiểm tra quyền: gồm quyền ở bảng nguoidungchucnang và nhom_chucnang

// Viết chức năng quản lí thư viện gồm
// Danh sách sách
// Danh sách phiếu thuê sách
// chi tiết phiếu thuê sách
// lập báo cáo như sau:
//----báo cáo theo ngày gồm các cột dữ liệu
//--------Ngày thuê, số lượng phiếu, số lượng sách
//----Báo cáo theo tháng
//--------Tháng thuê, số lượng phiếu, số lượng sách
//----Báo cáo sách
//--------Tháng thuê, tên sách, số lượng được thuê
//--------Sắp xếp theo số lượng được thuê giảm dần

// tally table 

// Danh sách sách
Route::get("/viewsach", 'sach_Controller@index')->name("viewsach");

//Thêm mới sách
Route::get('/create', 'sach_Controller@create')->name('create');
Route::post('/store', 'sach_Controller@store')->name('store');

//Cập nhật sách
Route::get('/edit/{id}', 'sach_Controller@edit')->name('editsach1');
Route::post('/editsach/{id}', 'sach_Controller@update')->name('editsach2');

//Xoa sach
Route::get('/del/{id}', 'sach_Controller@destroy');

// ---Báo cáo sách
Route::get("/viewBaoCaoSach", 'sach_Controller@viewBaoCaoSach')->name("viewbaocaosach");


Route::get('/sach/list', function () {
    $sachs = DB::table("sachs")->get();
    return view(
        "listsachs",
        compact([
            "sachs"
        ])
    );
})->name("sachs.list");

Route::get('/phieuthuesach/list', function () {
    $phieuthuesach = DB::table("phieuthuesach")->get();
    return view(
        "listphieuthuesach",
        compact([
            "phieuthuesach"
        ])
    );
})->name("phieuthuesach.list");

Route::get('/phieuthuechitiet/list', function () {
    $sachs = DB::table("sachs")
        ->pluck("tensach", "id");

    $phieuthuesach = DB::table("phieuthuesach")
        ->pluck("tenphieuthue", "id");

    $chitietphieuthue = DB::table("chitietphieuthue")->get();
    return view(
        "listchitietphieuthue",
        compact([
            "chitietphieuthue", "sachs", "phieuthuesach"
        ])
    );
})->name("chitietphieuthue.list");

Route::get('/thongke/ngay', function () {
    $thongkengay = DB::select(
        'SELECT
            pt.ngaythue
            ,count(distinct pt.id) as soluongphieu
            ,count(ptct.sachid) as soluongsach
        FROM phieuthuesach pt 
            LEFT JOIN chitietphieuthue ptct ON pt.id = ptct.phieuthuesachid
        GROUP BY pt.ngaythue'
    );
    return view("thongkesachtheongay", ["thongkengay" => $thongkengay]);
})->name("thongke.ngay");

Route::get('/thongke/thang', function () {
    $thongkethang = DB::select(
        'SELECT
            EXTRACT(month from pt.ngaythue) as thangthue
            ,count(distinct pt.id) as soluongphieu
            ,count(ptct.sachid) as soluongsach
        FROM phieuthuesach pt 
            LEFT JOIN chitietphieuthue ptct ON pt.id = ptct.phieuthuesachid
        GROUP BY thangthue'
    );
    return view("thongkesachtheothang", ["thongkethang" => $thongkethang]);
})->name("thongke.thang");

Route::get('chucnang/them',"ChucnangController@them");

Route::get("/viewChiTietThueSach/{id}", 'phieuthuesach@viewChiTietThueSach')->name("ctthuesach");

// Quản lí vào ra cho 1 công ty 
/*
    Tạo các model bằng migrate:
        nguoidung,phongban, mayquetthe, vàora

    Viết các chức năng sau:
        Quản lí nhân viên
        Quản lí phòng ban
        Quản lí máy quét thẻ (ai quẹt, mấy giờ)
        Thêm mới vào/ra
        Hiển thị danh sách vào ra cho 1 nhân viên theo ngày
        Hiển thị danh sách vào ra theo tháng (các ngày trong tháng)
            cho 1 nhân viên theo mẫu
            Ngày -------Giờ vào -------Giờ ra ----- số lần vào/ra
*/

Route::get('/nguoidung', ['as' => 'nguoidung', 'uses' => 'ModelNguoidungController@hienthi']);
Route::get('/them_nguoidung', 'ModelNguoidungController@them');
Route::post('/save_nguoidung', ['as' => 'save_nguoidung', 'uses' => 'ModelNguoidungController@save']);
Route::get('/sua_nguoidung/{id}', 'ModelNguoidungController@sua');
Route::post('/update_nguoidung', ['as' => 'update_nguoidung', 'uses' => 'ModelNguoidungController@update']);

Route::get('/listphongban', ['as' => 'listphongban', 'uses' => 'ModelPhongbansController@hienthi']);
Route::get('/add_phongban', 'ModelPhongbansController@them');
Route::post('/luu_phongban', ['as' => 'luu_phongban', 'uses' => 'ModelPhongbansController@save']);
Route::get('/edit_phongban/{id}', 'ModelPhongbansController@sua');
Route::post('/edit_phongban2', ['as' => 'edit_phongban2', 'uses' => 'ModelPhongbansController@edit2']);

Route::get('/divao', ['as' => 'divao', 'uses' => 'DivaoController@hienthi']);
Route::get('/them_divao', 'DivaoController@them');
Route::post('/save_divao', 'DivaoController@save');


Route::get('qb/get', function(){
    $data = DB::table('users')->get();
   
   
});


// Viết chương trình quản lí tài sản gồm
//----  Quản lí người dùng (tên)
//----  Quản lí nhà cung cấp (tên)
//----  Quản lí chủng loại (tên)
//----  Quản lí tài sản (tên)
//----  Di chuyển tài sản và ghi nhật kí di chuyển
//----  Xem danh sách di chuyển tài sản

// Danh sách người dùng
Route::get("/dsnguoidung", 'NguoidungController@index')->name("dsnguoidung");

// thêm mới người dùng
Route::get('/createnguoidung', 'NguoidungController@create')->name('createnguoidung');
Route::post('/createnguoidung', 'NguoidungController@store')->name('createnguoidung2');

//Cập nhật người dùng
Route::get('/editnguoidung/{id}', 'NguoidungController@edit')->name('edit');
Route::post('/editnguoidung/{id}', 'NguoidungController@update')->name('edit2');

//Xoa thuê nguoi dung
Route::get('/deletenguoidung/{id}', 'NguoidungController@destroy');

/////////////////////////////////

// Danh sách chủng loại
Route::get("/dschungloai", 'ChungloaiController@index')->name("dschungloai");

// thêm mới chủng loại
Route::get('/createchungloai', 'ChungloaiController@create')->name('createchungloai');
Route::post('/createchungloai', 'ChungloaiController@store')->name('createchungloai2');

//Cập nhật chủng loại
Route::get('/editchungloai/{id}', 'ChungloaiController@edit')->name('edit');
Route::post('/editchungloai/{id}', 'ChungloaiController@update')->name('edit2');

//Xoa thuê chủng loại
Route::get('/deletechungloai/{id}', 'ChungloaiController@destroy');

////////////////////////////////

// Danh sách nhacc
Route::get("/dsnhacungcap", 'NhacungcapController@index')->name("dsnhacungcap");

// thêm mới nhacc
Route::get('/createnhacc', 'NhacungcapController@create')->name('createnhacc');
Route::post('/createnhacc', 'NhacungcapController@store')->name('createnhacc2');

//Cập nhật nhacc
Route::get('/editnhacc/{id}', 'NhacungcapController@edit')->name('edit');
Route::post('/editnhacc/{id}', 'NhacungcapController@update')->name('edit2');

//Xoa thuê nhacc
Route::get('/deletenhacc/{id}', 'NhacungcapController@destroy');

///////////////////////////////////////

// Danh sách tài sản
Route::get("/dstaisan", 'TaisanController@index')->name("dstaisan");

// thêm mới tài sản
Route::get('/createts', 'TaisanController@create')->name('createts');
Route::post('/createts', 'TaisanController@store')->name('createts2');

//Cập nhật tài sản
Route::get('/editts/{id}', 'TaisanController@edit')->name('edit');
Route::post('/editts/{id}', 'TaisanController@update')->name('edit2');

//Xoa thuê tài sản
Route::get('/deletets/{id}', 'TaisanController@destroy');

/////////////////////////////////////////////

// Danh sách di chuyển tài sản 
Route::get("/dsnhatkitaisan", 'DichuyentaisanController@index')->name("dsnhatkitaisan");

// thêm mới danh sách nhật kí tài sản
Route::get('/createnkts', 'DichuyentaisanController@create')->name('createnkts');
Route::post('/createnkts', 'DichuyentaisanController@store')->name('createnkts2');

// Bán sách điện tử
    // Quản lý cấp học (Tiểu học, Trung học cơ sở, Trung học phổ thông)
    // Quản lý lớp học (lớp 1..12)
    // Quản lý đầu sách (tên sách, giá tiền mua online, lớp nào dùng)
    // Quản lý license (mã license, đầu sách, trạng thái (đã dùng hay chưa), ngày dùng)
    // Lập báo cáo số lượng sách được kích hoạt trong ngày theo mẫu: Cấp học, lớp họp, ngày, số lượng


    // Danh sách cấp học
Route::get("/dscaphoc", 'CaphocController@index')->name("dscaphoc");

// thêm mới cấp học
Route::get('/createcaphoc', 'CaphocController@create')->name('createcaphoc');
Route::post('/createcaphoc', 'CaphocController@store')->name('createcaphoc2');

//Cập nhật cấp học
Route::get('/editcaphoc/{id}', 'CaphocController@edit')->name('edit');
Route::post('/editcaphoc/{id}', 'CaphocController@update')->name('edit2');

//Xoa cấp học
Route::get('/deletecaphoc/{id}', 'CaphocController@destroy');

/////////////////////////////////////////////////////

// Danh sách lớp học
Route::get("/dslophoc", 'LophocController@index')->name("dslophoc");

// thêm mới lớp học
Route::get('/createlophoc', 'LophocController@create')->name('createlophoc');
Route::post('/createlophoc', 'LophocController@store')->name('createlophoc2');

//Cập nhật lớp học
Route::get('/editlophoc/{id}', 'LophocController@edit')->name('edit');
Route::post('/editlophoc/{id}', 'LophocController@update')->name('edit22');

//Xoa lớp học
Route::get('/deletelophoc/{id}', 'LophocController@destroy');


///////////////////////////////////////

// Danh sách book
Route::get("/dsbook", 'BookController@index')->name("dsbook");

// thêm mới book
Route::get('/createbook', 'BookController@create')->name('createbook');
Route::post('/createbook', 'BookController@store')->name('createbook2');

//Cập nhật book
Route::get('/editbook/{id}', 'BookController@edit')->name('editbook2');
Route::post('/editbook/{id}', 'BookController@update')->name('editbook2');

//Xoa book
Route::get('/deletebook/{id}', 'BookController@destroy');

///////////////////////////////////////

// Danh sách license
Route::get("/dslicense", 'LicenseController@index')->name("dslicense");

// thêm mới book
Route::get('/createlicense', 'LicenseController@create')->name('createlicense');
Route::post('/createlicense', 'LicenseController@store')->name('createlicense2');

//Cập nhật book
Route::get('/editlicense/{id}', 'LicenseController@edit')->name('edit');
Route::post('/editlicense/{id}', 'LicenseController@update')->name('edit2');

//Xoa book
Route::get('/deletelicense/{id}', 'LicenseController@destroy');

// Báo cáo
Route::get("/baocao", 'LicenseController@baocao')->name("baocao");