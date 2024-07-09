<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.min.js" defer></script>
</head>
<body class="flex h-screen bg-gray-200">

    <!-- Sidebar -->
    <div x-data="{ open: false }" class="flex flex-col w-64 bg-gray-800 text-white transition-transform transform md:translate-x-0 -translate-x-full md:relative absolute inset-y-0 left-0 z-30">
        <div class="flex items-center justify-between px-4 py-4 border-b">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
            <button @click="open = false" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-1 overflow-y-auto">
            <ul>
                <li>
                    <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 bg-gray-900 rounded-md">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Tasks</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <header class="flex items-center justify-between w-full px-6 py-4 bg-white border-b">
            <div class="flex items-center">
                <button @click="open = true" class="text-gray-500 focus:outline-none md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <h1 class="ml-4 text-2xl font-semibold text-gray-700">Main Content</h1>
            </div>
        </header>
        <main class="flex-1 p-6 bg-gray-100">
            <h2 class="text-2xl font-semibold text-gray-800">User List</h2>
            <p class="mt-4 text-gray-600">This is the user list table.</p>
            
            <!-- User List Table -->
            <div class="mt-6">
                <div class="overflow-x-auto">
                    <ul>
                        <li class="text-white py-2"><a href="">User List</a></li>
                        <!-- Add more sidebar links here -->
                    </ul>
                </div>
                <div class="flex-1 p-4">
                    <h2 class="text-xl font-bold mb-4">User List</h2>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Phone</th>
                                <th class="py-2 px-4 border-b">User Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($users as $user) --}}
                                <tr>
                                    <td class="py-2 px-4 border-b">>{{ $user->name }}</td>
                                    <td class="py-2 px-4 border-b">>{{ $user->email }}</td>
                                    <td class="py-2 px-4 border-b">>{{ $user->phone }}</td>
                                    <td class="py-2 px-4 border-b">>{{ $user->usertype }}</td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
