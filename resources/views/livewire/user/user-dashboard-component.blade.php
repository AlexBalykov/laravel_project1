<section class="text-gray-600 body-font relative">
	<div class="container px-5 py-24 mx-auto">
		<div class="flex flex-col text-center w-full mb-12">
			<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Dashboard</h1>
		</div>
		<div class="lg:w-1/2 md:w-2/3 mx-auto">
			<form method="POST" action="#" class="flex flex-wrap -m-2">
				@csrf
				@if($user->profile->image)
					<div class="p-2 w-full text-center">
						<img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 inline-flex items-center justify-center object-cover object-center rounded" alt="hero" src="{{ $user->profile->image }}">
					</div>
				@else
					<div class="p-2 w-full text-center">
						<div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
					</div>
				@endif
				<div class="p-2 w-full">
					<div class="relative">
						<label for="name" class="leading-7 text-sm text-gray-600">{{ __('Name') }}</label>
						<input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->name }}">
					</div>
				</div>
				<div class="p-2 w-1/2">
					<div class="relative">
						<label for="email" class="leading-7 text-sm text-gray-600">{{ __('Email') }}</label>
						<input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->email }}">
					</div>
				</div>
				<div class="p-2 w-1/2">
					<div class="relative">
						<label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
						<input type="text" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->phone }}">
					</div>
				</div>
				<div class="p-2 w-full">
					<div class="relative">
						<label for="email" class="leading-7 text-sm text-gray-600">Address</label>
						<input type="text" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->address }}">
					</div>
				</div>
				<div class="p-2 w-1/2">
					<div class="relative">
						<label for="city" class="leading-7 text-sm text-gray-600">City</label>
						<input type="text" id="city" name="city" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->city }}">
					</div>
				</div>
				<div class="p-2 w-1/2">
					<div class="relative">
						<label for="province" class="leading-7 text-sm text-gray-600">Province</label>
						<input type="text" id="province" name="province" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->province }}">
					</div>
				</div>
				<div class="p-2 w-full">
					<div class="relative">
						<label for="country" class="leading-7 text-sm text-gray-600">Country</label>
						<input type="text" id="country" name="country" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->country }}">
					</div>
				</div>
				<div class="p-2 w-full">
					<div class="relative">
						<label for="zipcode" class="leading-7 text-sm text-gray-600">Zipcode</label>
						<input type="text" id="zipcode" name="zipcode" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $user->profile->zipcode }}">
					</div>
				</div>
				<div class="p-2 w-full">
					<div class="relative">
						<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
							{{ __('Log Out') }}
						</a>
					</div>
				</div>
				<div class="p-2 w-full">
					<button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Save</button>
				</div>
			</form>
		</div>
	</div>
</section>