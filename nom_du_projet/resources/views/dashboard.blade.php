<x-app-layout>
    <x-slot name="header">

        <style>
            .class{
                display: flex;
                gap: 30px;
                text-align: center;
                align-items: center;
                margin-left: 45%;
            }
        </style>
        <div class="class">
            
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('E__Books ') }} 
        </h2>
            <img src="https://www.walnutpublication.com/blog/wp-content/uploads/2024/04/6897358.jpg"
            class="h-20 w-20 object-cover" 
            alt="Bibliothèque">
        

    </div>
    </x-slot>

    

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Include the Accueil content here -->
                @include('accueil')
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Include the Accueil content here -->
                @include('AboutUs')
            </div><br><br>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Include the Accueil content here -->
                @include('contact')
            </div>
    </div>
</x-app-layout>
