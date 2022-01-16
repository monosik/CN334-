<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <!-- <img src="https://media.npr.org/assets/img/2021/08/11/gettyimages-1279899488_wide-f3860ceb0ef19643c335cb34df3fa1de166e2761-s1100-c50.jpg" alt="Stickman" style="display: center; margin-left:auto; margin-right:auto; margin-bottom: 20px"> -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Tasks List</div>
                
                <div class="flex-auto text-right mt-2">
                    <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"  style="background-color: #8BE8CB;">Add new Task</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4" style="margin-bottom:0%; padding-bottom:0%">
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" style="background-color:#faad63; a:hover{color:#bcdefa}; cursor:pointer;">Edit</a>
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" style="background-color: #ff758f;">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <img src="https://thumbs.gfycat.com/BewitchedNarrowEstuarinecrocodile-max-1mb.gif" alt="catWrite" width="13%" height="13%" style="margin-left:85%; margin-right:auto;">
        </div>
    </div>
</div>
</x-app-layout>
