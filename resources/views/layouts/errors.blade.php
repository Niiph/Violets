                        @if($errors->any())
                            <div>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </div>
                        @endif