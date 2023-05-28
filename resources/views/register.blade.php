<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script> // Initialization for ES Users
     // Initialization for ES Users
    import {
    Input,
    Ripple,
    initTE,
    } from "tw-elements";

    initTE({ Input, Ripple });</script>
    <title>Document</title>
</head>
<body>
    <section class="h-screen">
        <div class="container h-full px-6 py-24">
            <div class="mb-5 text-center decoration-solid text-3xl font-sans">
                <p><b>Register Form</b></p>
            </div>
          <div
            class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
            <!-- Left column container with background-->
            <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
              <img
                src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="w-full"
                alt="Phone image" />
            </div>
            <!-- Right column container with form -->
            <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
                
              <form action="{{ route('register_post') }}" method="POST">
                @csrf  
                <!-- Email input -->
                <div class="relative-mb-6 ">
                    <label for="title">Name *</label>  
                    <input type="text" class="  
                    mb-2
                        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" placeholder="Masukan nama anda.." required value={{ old('name') }}>  
                    <!-- error message untuk title -->  
                    @error('name')  
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">  
                        {{ $message }}  
                    </div>  
                    @enderror  
                </div>
      
                <!-- Password input -->
                <div class="mb-2">
                    <label for="title">Email *</label>  
                    <input type="email" class="  
                        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email"  required placeholder="Masukan Email anda.." value={{ old('email') }}>  
                    <!-- error message untuk title -->  
                    @error('email')  
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">  
                        {{ $message }}  
                    </div>  
                    @enderror  
                </div>

                <div class="mb-2">
                    <label for="title">Password *</label>  
                    <input type="password" class="  
                        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password" placeholder="Masukan password anda.." required>  
                    <!-- error message untuk title -->  
                    @error('password')  
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">  
                        {{ $message }}  
                    </div>  
                    @enderror  
                </div>

                <div class="mb-6">
                    <label for="title">Password Konfirmasi *</label>  
                    <input type="password" class="  
                        form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password_confirmation" placeholder="Konfirmasi password anda.." required>  
                    <!-- error message untuk title -->  
                    @error('password')  
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">  
                        {{ $message }}  
                    </div>  
                    @enderror  
                </div>
      
                
                <!-- Social login buttons -->
                <button
                  class="mb-3 flex w-full items-center justify-center rounded bg-info px-7 pb-2.5 pt-3 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]"
                  style="background-color: green"
                  type="submit"
                  role="button"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  <!-- Twitter -->
                  Register
                </button>
                <!-- Divider -->
                <div
                  class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                  <p
                    class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
                    OR
                  </p>
                </div>
                <!-- Submit button -->
                <a
                  class="mb-3 flex w-full items-center justify-center rounded bg-primary px-7 pb-2.5 pt-3 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                  style="background-color: #3b5998"
                  href="/"
                  role="button"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  <!-- Facebook -->
                  Kembali
                </a>
            
              </form>
            </div>
          </div>
        </div>
    </section>
      <script src="https://cdn.tailwindcss.com"></script>  
    
</body>
</html>