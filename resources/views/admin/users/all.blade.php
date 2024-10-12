<x-admin-layout :title="$title">

    <div class="content px-0 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <x-user-search />



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Fullname
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Joined At
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($users->isEmpty())
                        @foreach ($users as $user)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->username }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->fullname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ showDateTime($user->created_at) }} <br> {{ diffForHumans($user->created_at) }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin.users.details', $user->id) }}"
                                        class="font-normal float-right text-blue-600 p-1 border-blue-600 border rounded-md hover:bg-blue-600 hover:text-white flex flex-row gap-x-1 w-max"><span
                                            class="material-symbols-outlined text-sm">
                                            visibility
                                        </span> <span class="text-sm">Details</span></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No registered user!
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>

            @if ($users->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $users->links() }}
                </div>
            @endif
        </div>

    </div>

</x-admin-layout>
