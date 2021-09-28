@extends('layouts.app')
@section('content')

@extends('layouts.app')

@section('content')

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="justify-end flex pr-6 pt-4">
                     <a class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="create">
                              {{ __('Create') }}
                     </a>
                 </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                             <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                                    @if($tickets->count() > 0)
                                      <table class="min-w-full divide-y divide-gray-200">

                                           <thead class="bg-gray-50">
                                             <tr>
                                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    序号
                                                 </th>
                                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    提交人员
                                                 </th>
                                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    提交日期
                                                 </th>
                                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    修改日期
                                                 </th>
                                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    报告状态
                                                 </th>
                                             </tr>

                                           </thead>

                                           <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($tickets as $ticket)
                                                 <tr>
                                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                     {{ $ticket->id }}
                                                  </td>
                                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="{{ route('tickets.show',$ticket) }}">{{ $ticket->user_id }}</a>
                                                  </td>
                                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $ticket->created_at }}
                                                  </td> 
                                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $ticket->updated_at }}
                                                  </td> 
                                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $ticket->status }}
                                                  </td>     
                                                 </tr>
                                           @endforeach

                                           </tbody>

                                      </table>

                                    @else
                                        <h3>尚未创建任何报告单。</h3>
                                    @endif
                                  </div>
                                  <div class="mt-3">
                                        {{ $tickets->links() }}
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection
