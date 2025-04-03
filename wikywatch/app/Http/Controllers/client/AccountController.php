<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('client.account.index');
    }

    
    // Hesap Bilgilerini Güncelleme
    public function accountUpdate(Request $request)
    {
        try {
            $user_id = $request->input('user_id');
            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $postal_code = $request->input('postal_code');
            $city_id = $request->input('city_id');
            $district_id = $request->input('district_id');
    
            $updated = DB::table('users')
                ->where('id', $user_id)
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'postal_code' => $postal_code,
                    'city_id' => $city_id,
                    'district_id' => $district_id,
                ]);
    
            if ($updated) {
                return response()->json([
                    'success' => true,
                    'message' => 'Bilgileriniz Başarıyla Güncellendi.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Kullanıcı Bulunamadı veya Güncelleme Başarısız Oldu.'
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Bilinmeyen Bir Hata: ' . $e->getMessage()
            ]);
        }
    }


    // Parola Güncelleme
    public function changePassword(Request $request)
    {
        try {
            $userId = $request->input('userId');
            $newPassword = $request->input('newPassword');
            $bcryptPassword = bcrypt($newPassword);
    
            $user = DB::table('users')->where('id', '=', $userId)->update(['password' => $bcryptPassword]);
    
            if ($user) {
                return response()->json(['success' => true, 'message' => 'Parola Başarıyla Güncellendi!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Parola Güncellenemedi!']);
            }
            
        } catch (Exception $error) {
            return response()->json(['success' => false, 'message' => 'Bir hata oluştu: ' . $error->getMessage()]);
        }
    }
}
