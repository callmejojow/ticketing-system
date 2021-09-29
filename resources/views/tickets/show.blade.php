@extends('layouts.app')

@section('content')
<div class="text-center mb-10 mt-10">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
       问题报告单 #{{ $ticket->id }}
    </h2>
    <p class="mt-4 block text-gray-400 text-sm">
       发布于 <time>{{ $ticket->created_at->diffForHumans() }}</time>
    </p>
</div>


  <div class="space-y-6 bg-gray-100">
    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 rounded-sm">
          <h3 class="text-lg font-medium leading-6 text-gray-900">个人信息</h3>
          <p class="mt-1 text-sm text-gray-500">
            请输入你的个人信息
          </p>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">

                <div class="item-stretch grid grid-cols-2 gap-6">

                    <label for="user_id" class="block text-sm font-medium text-gray-700">
                      员工姓名
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="user_id" id="user_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" disabled value="{{ $ticket->user_id }}">

                       @error('user_id')
                          <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                       @enderror

                    </div>

                    <label for="manager_id" class="block text-sm font-medium text-gray-700">主管姓名
                    </label>
                    <select id="manager_id" name="manager_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md ">
                        <option selected>{{ $ticket->manager_id }}</option>
                    </select>


                    <label for="location_id" class="block text-sm font-medium text-gray-700">
                      所属门店
                    </label>
                    <select id="location_id" name="location_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option selected>{{ $ticket->location_id }}</option>
                    </select>

                    <label for="team_id" class="block text-sm font-medium text-gray-700">
                      所属团队
                    </label>
                    <select id="team_id" name="team_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option selected>{{ $ticket->team_id }}</option>
                    </select>

                </div>

              </div>
            </div>
          </div>
  <!--    For Upload Image
           <div>
              <label class="block text-sm font-medium text-gray-700">
                Cover photo
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div> -->
        </div>
      </div>

     <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <h3 class="text-lg font-medium leading-6 text-gray-900">报告单状态</h3>
          <p class="mt-1 text-sm text-gray-500">
            包括报告单紧急程度，和提交后的处理情况。
          </p>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <fieldset>
              <div>
                <legend class="text-lg font-medium text-gray-700">申请紧急程度</legend>
              </div>
              <div class="mt-4 space-y-4">
                <div class="flex items-center">
                  <input id="priority" name="priority" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 required" disabled>

                    @if($ticket->priority == 'urgent')
                     <label for="urgent" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>请尽快处理</p>
                     </label>

                    @elseif($ticket->priority == 'nonurgent') 
                     <label for="nonurgent" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>非紧急</p>
                     </label>

                    @elseif($ticket->priority == '7') 
                     <label for="7" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>请在一周内处理</p>
                     </label>

                    @elseif($ticket->priority == '3') 
                     <label for="3" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>请在3天内处理</p>
                     </label>
                    @else 
                     <label for="nopriority" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>系统无记录</p>
                     </label>
                    @endif
                    
            </fieldset>

            <fieldset>
              <div class="mt-10">
                <legend class="text-lg font-medium text-gray-700">报告单处理情况</legend>
              </div>
              <div class="mt-4 space-y-4">
                <div class="flex items-center">
                  <input id="status" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 required" disabled>

                  @if($ticket->status == 'pending') 
                    <label for="pending" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>问题已提交</p>
                    </label>

                  @elseif($ticket->status == 'inprogress')
                    <label for="inprogress" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>处理中</p>
                    </label>   
                  @elseif($ticket->status == 'solved')
                    <label for="solved" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>已解决</p>
                    </label> 

                  @else
                    <label for="nostatus" class="ml-3 block text-sm font-medium text-gray-700">
                      <p>系统无记录</p>
                    </label> 
                      
                  @endif
                    
            </fieldset>
        </div>
      </div>
    </div>

      <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
           <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <h3 class="text-lg font-medium leading-6 text-gray-900">问题描述</h3>
                      <p class="mt-1 text-sm text-gray-500">
                        请填写所反馈问题的具体信息
                      </p>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                      <form action="#" method="POST">

                    <label for="description" class="block text-sm font-medium text-gray-700">问题描述</label>

                    <div class="mt-2 flex rounded-md shadow-sm">
                      <input type="text" name="description" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-48 shadow-sm sm:text-sm border-gray-300 rounded-md" disabled value="{{ $ticket->description }}">

                    </div>

                    <label for="comment" class="mt-10 block text-sm font-medium text-gray-700">相关建议</label>

                    <div class="mt-2 flex rounded-md shadow-sm">
                      <input type="text" name="comment" id="comment" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-48 shadow-sm sm:text-sm border-gray-300 rounded-md" disabled value="{{ $ticket->comment }}">
                    </div>


                    <label for="solution" class="mt-10 block text-sm font-medium text-gray-700">解决方案</label>

                    <div class="mt-2 flex rounded-md shadow-sm">
                      <input type="text" name="solution" id="solution" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-48 shadow-sm sm:text-sm border-gray-300 rounded-md" disabled value="{{ $ticket->solution }}">
                    </div>
                  </div>
           </div>

           <div class="mt-6 mb-6 flex justify-end sm:mb-3">
                        <a class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('tickets.index', $ticket) }}">
                          {{ __('Back') }}
                        </a>
                        <a class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="edit">
                          {{ __('Edit') }}
                        </a>
           </div>
         </div>
        </div>
       </form>
      </div>
    </div>
  </div>
@endsection