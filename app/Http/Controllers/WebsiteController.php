<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
 public function accord_page(){
    return view('accord');
 }
 public function products_page($id){
   
    $data['id'] =$id;
    $data['name'] ='صالة ريفان';
    $data['price'] =6356;
    $data['images']= array('Sc',
    'Screenshot  33 2023-09-27 231241',
    'Screenshot  55 2023-09-27 231138',
    'Screenshot  55 2023-09-27 231138',
    'Screenshot  55 2023-09-27 231138',
    'Screenshot  55 2023-09-27 231138',
    'Screenshot  55 2023-09-27 231138');

    $data['descrebtion']='صالة اللوتس لمناسبات السعيدة والأفراح, التفاصيل الجميلة هي من تصنع زفاف جميل و نحن في صالة اللوتس نعمل على التفاصيل المميزة.
    ';
    $data['tables']=array(
       'عدد الكراسي ' => '60',
       'عدد الطاولات' => '70',
       'تلبيسة الكراسي	'=> 'متوفر ',
       'مكيف '=> 'متوفر ',
       'اضاءة '=> 'متوفر ',
       'دي جي '=> 'متوفر ',
       'تصوير'=> 'غير متوفر ',

    );
    $data ['Additional']='السعر يشمل : ضيافة الرجال قهوة وشاي بدون اشهار رجال " أشهار رجال : زيادة 100$';
    // $data ['cardes']=array(['صورة 1 مقصوصة','صورة 2 مقصوصة','pec3'],
    // []);
    return view('products', $data);

 }
   
 public function search_page(){
    return view('search');
 }
  
}
