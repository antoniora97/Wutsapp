<div class="flex items-center justify-between w-full h-16 px-3 shadow-lg">
    <div id="open-profile" class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer">
        <img src="https://cdn.dribbble.com/users/5534/screenshots/14230133/profile_4x.jpg" alt="" class="object-cover w-full h-full rounded-full">
    </div>
    <div class="flex items-center justify-between gap-5 text-xl">
        <i class="flex text-gray-600 fi fi-sr-comment-alt"></i>
        <i class="flex text-gray-600 fi fi-sr-users-alt"></i>
        <i class="flex text-gray-600 fi fi-sr-phone-call"></i>
    </div>
</div>
<div id="profile" class="absolute top-0 z-30 hidden w-full h-screen overflow-y-scroll bg-slate-100">
    <div class="flex items-center w-full h-16 gap-2 px-3">
        <i id="close-profile" class="flex items-center justify-center text-2xl cursor-pointer fi fi-sr-arrow-small-left"></i>
        <h2 class="text-xl font-bold">Perfil</h2>
    </div>

    <form action="">
        <div class="flex flex-col items-center flex-grow">
            <div id="profile_img" class="relative flex items-center justify-center w-48 h-48 rounded-full cursor-pointer">
                <label for="user_profile_img" id="user_profile_img_label" class="absolute flex items-center justify-center w-full h-full gap-2 rounded-full cursor-pointer bg-slate-500/80">
                    <div class="flex flex-col items-center gap-2 text-white w-28">
                        <i class="flex text-2xl fi fi-sr-camera"></i>
                        <p class="text-sm text-center uppercase cursor-pointer">Cambiar foto de perfil</p>
                    </div>
                </label>
                <input id="user_profile_img" type="file" hidden>
                <img src="{{asset('storage/' . $user->profile_img)}}" alt="" class="object-cover w-48 h-48 rounded-full">
            </div>
        </div>
    </form>
</div>
