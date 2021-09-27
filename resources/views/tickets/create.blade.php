@extends('layouts.app')

@section('content')
<div class="text-center mb-10 mt-10">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
       紧急情况报告单
    </h2>
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
        <form class="space-y-6"  action="{{ route('tickets.create') }}" 
              method="POST">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">

              <div class="item-stretch grid grid-cols-2 gap-6">

                  <label for="user_id" class="block text-sm font-medium text-gray-700">
                    员工姓名
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="username" id="user_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" value="自动获取">
                  </div>

                  <label for="manager_id" class="block text-sm font-medium text-gray-700">主管姓名</label>
                  <select id="manager_id" name="manager_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                      <option>张三</option>
                      <option selected>李四</option>
                      <option>王五</option>
                  </select>

                  <label for="location_id" class="block text-sm font-medium text-gray-700">
                    所属门店
                  </label>
                  <select id="location_id" name="location_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                      <option selected>一店</option>
                      <option>二店</option>
                      <option>三店</option>
                      <option>四店</option>
                      <option>五店</option>
                      <option>六店</option>
                      <option>办公室</option>
                  </select>

                  <label for="team_id" class="block text-sm font-medium text-gray-700">
                    所属团队
                  </label>
                  <select id="team_id" name="team_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                      <option>财务团队</option>
                      <option selected>管理团队</option>
                      <option>店长</option>
                  </select>

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
        </form>
      </div>
    </div>
  </div>

  <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
        <p class="mt-1 text-sm text-gray-500">
          Decide which communications you'd like to receive and how.
        </p>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form class="space-y-6" action="#" method="POST">
          <fieldset>
            <div>
              <legend class="text-base font-medium text-gray-900">申请紧急程度</legend>
            </div>
            <div class="mt-4 space-y-4">
              <div class="flex items-center">
                <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">
                  请尽快处理
                </label>
              </div>
              <div class="flex items-center">
                <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                  请在 <input type="number" name="daycounts" class="mt-1 w-16 pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"></input> 天内处理
                </label>
              </div>
              <div class="flex items-center">
                <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">
                  非紧急
                </label>
              </div>
            </div>
          </fieldset>

        </form>
      </div>
    </div>
  </div>

  <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        <p class="mt-1 text-sm text-gray-500">
          Use a permanent address where you can receive mail.
        </p>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-4">
              <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
              <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
              <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option>United States</option>
                <option>Canada</option>
                <option>Mexico</option>
              </select>
            </div>

            <div class="col-span-6">
              <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
              <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="city" class="block text-sm font-medium text-gray-700">City</label>
              <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
              <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
              <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
              <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
              <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <div class="flex justify-end">
    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Cancel
    </button>
    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Save
    </button>
  </div>
</div>