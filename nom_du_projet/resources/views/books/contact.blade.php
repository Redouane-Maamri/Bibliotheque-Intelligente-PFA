<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">📚 Contacts Collection</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add New contacts Button -->
        

        <!-- contactss Table -->
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-gray-900 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Message</th>
                        <th class="py-3 px-6 text-left">User_Id</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contacts)
                        <tr class="border-b hover:bg-gray-100 transition">
                            
                            
                            <td class="py-4 px-6 text-gray-600">{{ $contacts->name }} </td>
                            <td class="py-4 px-6 text-gray-600">{{ $contacts->email }}</td>
                            <td class="py-4 px-6 text-gray-600">{{ $contacts->message }} </td>
                            <td class="py-4 px-6 text-gray-600">{{ $contacts->user_id }} </td>

                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
