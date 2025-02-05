<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" style="display: contents;">
                        <h1 style="font-size: 25px; margin-right: 10px;">
                            <i class="fa-solid fa-briefcase logo" ></i>
                        </h1>
                        <h3 style="font-size: 25px;">
                            Jobs for graduate Bahrain students   
                       </h3>     
                    </a>
                </div>


            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    @auth
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    @endauth
                                 
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>
                                    @auth
                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>
                                    @endauth
                                  

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>
                                    @auth
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    @endauth
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif
                
                <span>{{Auth::user()->name}}</span>

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                      @if(Auth::check())
                        <x-jet-dropdown align="right" width="48">
                           
            
                            <x-slot name="trigger">
                                @auth
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            @if (Auth::user()->profile_photo_path == NULL)
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/profile-photos/user.png') }}" alt="{{ Auth::user()->name }}" />
                                            @else
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage') }}/{{Auth::user()->profile_photo_path}}" alt="{{ Auth::user()->name }}" />
                                            @endif
                                            
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                @endauth
                            
                                    
                            </x-slot>

                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    {{ __('Home') }}
                                </x-jet-dropdown-link>
                                <!-- Account Management -->
                                @auth
                                    @if ( Auth::user()->utype == 'ADM')
                                        <x-jet-dropdown-link href="{{ route('admin.category') }}">
                                            {{ __('Categories') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('admin.companies') }}">
                                            {{ __('Compamies') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('admin.students') }}">
                                            {{ __('Students') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('admin.jobads') }}">
                                            {{ __('All Job Ads') }}
                                        </x-jet-dropdown-link>
                                    @elseif ( Auth::user()->utype == 'COMPADM')
                                        <x-jet-dropdown-link href="{{ route('company.jobs') }}">
                                            {{ __('My Jobs') }}
                                        </x-jet-dropdown-link>
                                    @elseif ( Auth::user()->utype == 'STD')
                                    <x-jet-dropdown-link href="{{ route('student.requests') }}">
                                        {{ __('My  Requests') }}
                                    </x-jet-dropdown-link>
                                    @endif

                                   
                                @endauth
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>


                                <x-jet-dropdown-link href="{{ route('allJobAds') }}">
                                    {{ __('All Job Ads') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                      @else
                      <div style="display: block ruby;">
                        <a class="nav-link"  href="{{ route('login')}}">
                            <span>Login</span></a>
                          <a class="nav-link" href="{{ route('register')}}">
                            <span>Sign Up</span>
                        </a>

                      </div>


  
        
                      @endif
                
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
           

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @auth
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            @if (Auth::user()->profile_photo_path == NULL)
                              <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/profile-photos/user.png') }}" alt="{{ Auth::user()->name }}" />

                            @else
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage') }}/{{Auth::user()->profile_photo_path}}" alt="{{ Auth::user()->name }}" />
                            @endif
                        </div>
                    @endif
                @endauth
              

                <div>
                    @auth
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    @endauth

                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-jet-responsive-nav-link>

                @auth
                @if ( Auth::user()->utype == 'ADM')
                  
                    <x-jet-responsive-nav-link href="{{ route('admin.category') }}" :active="request()->routeIs('admin.category')">
                        {{ __('Categories') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('admin.companies') }}" :active="request()->routeIs('admin.companies')">
                        {{ __('Compamies') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('admin.students') }}" :active="request()->routeIs('admin.students')">
                        {{ __('Students') }}
                    </x-jet-responsive-nav-link>


                    <x-jet-responsive-nav-link href="{{ route('admin.jobads') }}" :active="request()->routeIs('admin.jobads')">
                        {{ __('All Job Ads') }}
                    </x-jet-responsive-nav-link>

                @elseif ( Auth::user()->utype == 'COMPADM')
                 
                    <x-jet-responsive-nav-link href="{{ route('company.jobs') }}" :active="request()->routeIs('company.jobs')">
                        {{ __('My Jobs') }}
                    </x-jet-responsive-nav-link>

                @elseif ( Auth::user()->utype == 'STD')
          
                    <x-jet-responsive-nav-link href="{{ route('student.requests') }}" :active="request()->routeIs('student.requests')">
                        {{ __('My  Requests') }}
                    </x-jet-responsive-nav-link>

                @endif

               
            @endauth


                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    @auth
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-jet-responsive-nav-link>
                    @endauth
                   

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @auth
                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endauth
                   
                @endif
            </div>
        </div>
    </div>
</nav>
