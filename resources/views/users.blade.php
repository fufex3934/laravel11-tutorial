@vite('resources/css/app.css', 'resources/js/app.js')

<div class="p-6 max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add New User</h1>
   
    @if(session('message'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ url('add') }}" method="post" class="space-y-4">
        @csrf
        
        <div>
            <input type="text" name="username" placeholder="Enter name" class="w-full p-3 border rounded-lg" required>
        </div>
        
        <div>
            <input type="email" name="email" placeholder="Enter email" class="w-full p-3 border rounded-lg" required>
        </div>
        
        <div>
            <input type="number" name="phone" placeholder="Enter phone number" class="w-full p-3 border rounded-lg" required>
        </div>
        
        <div>
            <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Add New User</button>
        </div>
    </form>
</div>
