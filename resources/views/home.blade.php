@extends('layouts.app')

@section('content')
<div class="container">
  
    <div class="row">
        <div class="col-3 p-4"><img src ='https://image.flaticon.com/icons/svg/2111/2111463.svg' width='90%' class='rounded-circle' /></div>
        <div class="col-9 pt-4">
            <div><h1>{{ $user->username}}</h1></div>
            <div class="pt-5 d-flex">
            <div class="pr-4"><strong>135</strong> posts</div>
            <div class="pr-4"><strong>140k</strong> followers</div>
            <div class="pr-4"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bolder">{{$user}}</div>
        <div class='font-weight-lighter text-break'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus neque omnis laboriosam fugiat veniam in sapiente esse inventore quae sint! Accusantium nulla quis, architecto fugit reprehenderit vitae dolor cupiditate enim.</div>
        <div><a href='#' style="text-decoration: none;color:#000;">www.instagram.com</a></div>    
    </div>
        </div>
        
        <div class="row pt-5">
        <div class="col-4 ">
        <img alt="Photo by Thaer Alazzeh on May 15, 2019." class="FFVAD" decoding="auto" sizes="135.19810485839844px" srcset="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ae416c5ea60dc3ea1f25743e06be862a&amp;oe=5F540438 150w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=d7c4e4104737f47a1ce4c9c6f679e7d7&amp;oe=5F564FFE 240w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=184b71974f97e550abfd4c5d5c3f681a&amp;oe=5F56ADC8 320w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=8c4621a97715b97daa5ca7b9e5fb1465&amp;oe=5F564B1E 480w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91 640w" src="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91" width='100%' style="object-fit: cover;" class="w-100">
     </div>
        
        <div class="col-4 ">
        <img alt="Photo by Thaer Alazzeh on May 15, 2019." class="FFVAD" decoding="auto" sizes="135.19810485839844px" srcset="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ae416c5ea60dc3ea1f25743e06be862a&amp;oe=5F540438 150w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=d7c4e4104737f47a1ce4c9c6f679e7d7&amp;oe=5F564FFE 240w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=184b71974f97e550abfd4c5d5c3f681a&amp;oe=5F56ADC8 320w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=8c4621a97715b97daa5ca7b9e5fb1465&amp;oe=5F564B1E 480w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91 640w" src="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91" width='100%' style="object-fit: cover;" class="w-100">
     </div>
        
        <div class="col-4 ">
        <img alt="Photo by Thaer Alazzeh on May 15, 2019." class="FFVAD" decoding="auto" sizes="135.19810485839844px" srcset="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ae416c5ea60dc3ea1f25743e06be862a&amp;oe=5F540438 150w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=d7c4e4104737f47a1ce4c9c6f679e7d7&amp;oe=5F564FFE 240w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=184b71974f97e550abfd4c5d5c3f681a&amp;oe=5F56ADC8 320w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=8c4621a97715b97daa5ca7b9e5fb1465&amp;oe=5F564B1E 480w,https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91 640w" src="https://instagram.famm3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/60657059_550565499107820_7080041212131807985_n.jpg?_nc_ht=instagram.famm3-2.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=Fz8iAewCRugAX-rIoP_&amp;oh=ca3e4f49141d8b5d6669f1df6e259755&amp;oe=5F562E91" width='100%' style="object-fit: cover;" class="w-100">
    </div>
       

        </div>
     
</div>
@endsection
