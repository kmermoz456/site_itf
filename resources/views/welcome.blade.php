@extends('layouts.app')

@section('content')

<div>
    <div class="p-5 ">
        <h2 class="text-center text-2xl font-semibold">QUI NOUS SOMMES</h2>
        <p class="text-center">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus tempore inventore sequi voluptatibus sint voluptatum neque, tempora saepe, nihil velit expedita molestiae, architecto aliquid itaque omnis voluptate magnam maxime quaerat?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti porro magnam, inventore aut blanditiis unde reiciendis nesciunt ea adipisci sapiente laudantium pariatur voluptate fugiat soluta enim iste ab sunt consequuntur?
        </p>
    </div>

    <div class=" ">
        <h2 class="text-center text-2xl font-semibold">Pourquoi Nous choisir pour vous aidez dans votre cursus universitaire</h2>
        <div class="flex md:flex-row flex-col justify-between p-2 bg-gray-100 my-2">
            
            <div class="flex flex-col items-center justify-center">
                <img  class="w-[200px]   bg-white h-[200px] rounded-[50%] shadow-md p-2" src="{{asset('img/undraw_educator_re_ju47.svg')}}" alt="">
                <div class="text-center my-1">
                <h2 class="font-bold text-xl">Enseignant Expérimenté</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
            </div>

            <div class="flex flex-col items-center justify-center">
                <img  class="w-[200px]  bg-white h-[200px] rounded-[50%] shadow-md p-2" src="{{asset('img/undraw_online_learning_re_qw08.svg')}}" alt="">
                <div class="text-center my-1">
                <h2 class="font-bold text-xl">Sytème de parrainange</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>

            <div class="flex flex-col items-center justify-center">
                <img  class="w-[200px]  bg-white h-[200px] rounded-[50%] shadow-md p-2" src="{{asset('img/undraw_educator_re_ju47.svg')}}" alt="">
                <div class="text-center my-1">
                <h2 class="font-bold text-xl">Enseignant Expérimenté</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.  </div>
            </div>

                     
            
        </div>
    </div>
    <div class="my-2">
                            <h2 class="text-center text-2xl my-2 font-bold">Nos tarifs</h2>
<div class="flex  justify-center  gap-x-3 ">
                            <div class="rounded-md bg-blue-950 text-white shadow p-3">
                                
                                    <h2 class="font-bold text-2xl">Inscription</h2>
                                    <ul class="list-disc p-3">
                                        <li>5.000 FCFA</li>
                                    </ul>
                               
                            </div>

                            <div class="p-4 bg-blue-950 text-white rounded-md shadow">
                                
                                    <h2 class="font-bold  text-2xl">Mensualité</h2>
                                    <ul class="list-disc p-2" >
                                        <li>10.000 FCFA</li>
                                        <li>Accès à notre platforme web et mobile</li>
                                    </ul>
                                
                            </div>
    
    </div>
    </div>
    <div class="my-3 bg-gray-50">
        <h2 class="font-bold text-center  text-2xl">Nos étudiants témoignent</h2>

        <div class="flex md:flex-row flex-col justify-between  p-2 gap-x-3 items-center">
           <img class="shadow-md rounded-full bg-green-700" src="{{asset('img/student-happy.png')}}" alt="" srcset="">
       
            <div class="md:absolute md:w-[700px] md:right-0 bg-white rounded-lg p-3">
            <h2 class="font-bold text-center text-2xl">N. Akissi Michelle</h2>

               <p class="text-xl"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quisquam! Officia maxime inventore eligendi consequatur ipsa tempora necessitatibus, reiciendis accusantium odio veritatis numquam excepturi provident fuga cumque, cum quasi quisquam?
                  </p>              
            </div>
        </div>

    </div>
</div>

@endsection