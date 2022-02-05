<x-my-layout>
	<section class="text-gray-600 body-font relative">
		<div class="container px-5 py-24 mx-auto">
			<div class="flex flex-col text-center w-full mb-12">
				<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Login</h1>
			</div>
			<div class="lg:w-1/2 md:w-2/3 mx-auto">
				<x-jet-validation-errors class="mb-4" />
				@if (session('status'))
					<div class="mb-4 font-medium text-sm text-green-600">
						{{ session('status') }}
					</div>
				@endif
				<form method="POST" action="{{ route('login') }}" class="flex flex-wrap -m-2">
					@csrf
					<div class="p-2 w-full">
						<div class="relative">
							<label for="email" class="leading-7 text-sm text-gray-600">{{ __('Email') }}</label>
							<input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<label for="password" class="leading-7 text-sm text-gray-600">{{ __('Password') }}</label>
							<input type="text" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<input type="checkbox" id="remember_me" name="remember" class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out">
							<label for="remember_me" class="leading-7 ml-1 text-sm text-gray-600">{{ __('Remember me') }}</label>
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							@if (Route::has('password.request'))
								<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
									{{ __('Forgot your password?') }}
								</a>
							@endif
						</div>
					</div>
					<div class="p-2 w-full">
						<button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ __('Log in') }}</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</x-my-layout>