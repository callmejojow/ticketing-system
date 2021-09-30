@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="container mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex items-center justify-center py-80 md:flex justify-center">
					    <div class="mr-4 flex-shrink-0 self-center">
						    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
					    </div>
					    <div>
						    <h4 class="text-lg font-medium">糟糕，出错了！</h4>
						    <p class="mt-1">
						      您所查找的报告单并不存在，请<a href="index" class="font-bold text-green-600">{{ __('返回') }}</a>重新查找。
						    </p>
						    
					    </div>

	 	        	</div>
				</div>
			</div>
		</div>
    </div>

@endsection
