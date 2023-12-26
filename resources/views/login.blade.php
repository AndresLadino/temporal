<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ladco Steel S.A.S. | Iniciar sesión</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="h-full py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-yellow-100 via-yellow-300 to-yellow-500 transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="w-72 max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Iniciar sesión</h1>
                        @if ($errors->has('error'))
                            <div class="text-red-500">{{ $errors->first('error') }}</div>
                        @endif
                    </div>
                    <div class="divide-y divide-gray-200">
                        <form method="POST" action="{{ route('inicia-sesion') }}">
                            @csrf
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="email" name="email" id="email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-amber-600 peer"
                                        placeholder=" " required />
                                    <label for=""
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Usuario</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="password" name="password" id="password"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-amber-600 peer"
                                        placeholder=" " required />
                                    <label for=""
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="remember" id="rememberCheck" type="checkbox" value=""
                                        class="w-4 h-4 text-amber-300 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 focus:ring-2">
                                    <label for="default-checkbox"
                                        class="ml-2 text-sm text-gray-500 dark:text-gray-300">Recordarme</label>
                                </div>
                                <div class="relative">
                                    <input type="submit"
                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  px-2 py-1">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
