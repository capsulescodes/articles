<script setup>

import Layout from '/resources/js/components/Layout.vue';

</script>

<template>

    <Layout>

        <div class="mt-6 px-6 py-4 mx-8 sm:mx-0 bg-white overflow-hidden rounded-lg">

            <form class="space-y-4">

                <div class="space-y-1">

                    <label class="font-medium text-xs text-gray-700" for="name"><span>Name</span></label>

                    <input
                        id="name"
                        name="name"
                        type="text"
                        class="px-3 py-2 block w-full rounded-md border focus-visible:outline-none focus:border-transparent focus:ring-2 focus:ring-primary-red"
                        autocomplete="name"
                        autofocus
                        required
                    >

                </div>

                <div class="space-y-1">

                    <label class="font-medium text-xs text-gray-700" for="email"><span>Email</span></label>

                    <input
                        id="email"
                        name="email"
                        type="text"
                        class="px-3 py-2 block w-full rounded-md border focus-visible:outline-none focus:border-transparent focus:ring-2 focus:ring-primary-red"
                        autocomplete="username"
                        required
                    >

                </div>

                <div class="space-y-1">

                    <label class="font-medium text-xs text-gray-700" for="password"><span>Password</span></label>

                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="px-3 py-2 block w-full rounded-md border focus-visible:outline-none focus:border-transparent focus:ring-2 focus:ring-primary-red"
                        autocomplete="new-password"
                        required
                    >

                </div>

                <div class="space-y-1">

                    <label class="font-medium text-xs text-gray-700" for="password_confirmation"><span>Confirm Password</span></label>

                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        class="px-3 py-2 block w-full rounded-md border focus-visible:outline-none focus:border-transparent focus:ring-2 focus:ring-primary-red"
                        autocomplete="new-password"
                        required
                    >

                </div>

                <div class="pb-4">

                    <label class="font-medium text-xs text-gray-700">

                        <div class="flex items-center space-x-2">

                            <input
                                name="terms"
                                type="checkbox"
                                class="w-4 h-4 focus-visible:outline-none accent-primary-red"
                                required
                            >

                            <div>

                                <span>I agree to the </span>

                                <a href="/terms" >Terms of Service</a>

                                <span> and </span>

                                <a href="/privacy" >Privacy Policy</a>

                            </div>

                        </div>

                    </label>

                </div>

                <div class="flex items-center justify-end space-x-4 text-end">

                    <a href="/" class="text-sm rounded-md text-gray-600 hover:text-primary-black" >Already registered?</a>

                    <button type="submit" class="px-4 py-2 rounded-md button bg-primary-red text-primary-white hover:bg-primary-black active:bg-gray-900">Register</button>

                </div>

            </form>

        </div>

    </Layout>

</template>
