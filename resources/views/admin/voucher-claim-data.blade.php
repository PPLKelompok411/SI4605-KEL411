<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Voucher Claims Data - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <!-- back ke dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center mb-4 text-green-700 hover:text-green-900 font-semibold">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Kembali ke Dashboard
        </a>
        <h1 class="text-2xl font-bold mb-6">User Voucher Claims Data</h1>

        <form method="GET" action="{{ route('admin.voucher.claims.index') }}" class="mb-4 flex">
            <input 
                type="text" 
                name="search" 
                value="{{ $search }}" 
                placeholder="Search user voucher claims..."
                class="w-full rounded-l-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
            >
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r-md">
                Search
            </button>
        </form>

        <div class="bg-white shadow rounded-lg overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-center">No</th>
                        <th class="px-4 py-2 text-center">Name</th>
                        <th class="px-4 py-2 text-center">Email</th>
                        <th class="px-4 py-2 text-center">Phone</th>
                        <th class="px-4 py-2 text-center">Claim Code</th>
                        <th class="px-4 py-2 text-center">Status</th>
                        <th class="px-4 py-2 text-center">Claimed At</th>
                        <th class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($claims as $index => $claim)
                    <tr>
                        <td class="px-4 py-2 text-center">
                            {{ ($claims->currentPage() - 1) * $claims->perPage() + $index + 1 }}
                        </td>
                        <td class="px-4 py-2 text-center">{{ $claim->name }}</td>
                        <td class="px-4 py-2 text-center">{{ $claim->email }}</td>
                        <td class="px-4 py-2 text-center">{{ $claim->phone }}</td>
                        <td class="px-4 py-2 font-mono text-center">{{ $claim->claim_code }}</td>
                        <td class="px-4 py-2 text-center">
                            <span class="inline-block px-2 py-1 rounded 
                                {{ $claim->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                                {{ ucfirst($claim->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-2 text-center">
                             {{ \Carbon\Carbon::parse($claim->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i') }} WIB
                        </td>
                        <td class="px-4 py-2 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- button Edit Status -->
                                <button
                                    type="button"
                                    onclick="openEditModal({{ $claim->id }}, '{{ $claim->status }}')"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg"
                                >
                                    Edit
                                </button>
                                <!-- button Hapus -->
                                <form action="{{ route('admin.voucher.claims.destroy', $claim->id) }}" method="POST" onsubmit="return confirm('Confirm deletion of this claim?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded-lg">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-4 py-4 text-center text-gray-500">
                            No voucher claims found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $claims->withQueryString()->links() }}
        </div>
    </div>

    <!-- Modal Edit Status -->
<div id="edit-modal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm relative">
        <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl"
        onclick="closeEditModal()">&times;</button>

        <h2 class="text-lg font-semibold mb-4">Edit Claim Status</h2>
        <form id="edit-status-form" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="claim_id" id="edit-claim-id">
            <div class="mb-4">
                <label for="status" class="block mb-1 font-medium">Status</label>
                <select name="status" id="edit-status" class="w-full border rounded px-3 py-2">
                    <option value="pending">Belum Diambil</option>
                    <option value="taken">Sudah Diambil</option>
                </select>
            </div>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>
    </div>
</div>



    <script>
    function openEditModal(id, status) {
        document.getElementById('edit-modal').classList.remove('hidden');
        document.getElementById('edit-claim-id').value = id;
        document.getElementById('edit-status').value = status;
        // Set action form
        document.getElementById('edit-status-form').action = '{{ url("/admin/voucher-claims") }}/' + id + '/status';

    }
    function closeEditModal() {
        document.getElementById('edit-modal').classList.add('hidden');
    }
    </script>
</body>
</html>