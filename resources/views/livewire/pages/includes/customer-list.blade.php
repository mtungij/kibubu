
                <table wire:key="{{$member->id}}" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                           
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Jina Maarufu
                            </th>

                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Nambari ya Simu
                            </th>
                            
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Status
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Date
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                     
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                         
                            <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                <!-- <img class="w-10 h-10 rounded-full" src="../../images/users/robert-brown.png" alt="Robert Brown avatar">  -->
                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    <div class="text-base font-semibold text-gray-900 dark:text-white uppercase">{{$member->fname}}</div>
                                </div>
                            </td>
                            <!-- <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{$member->nickname}}</td> -->
                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{$member->phone}}</td>

                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                     <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>  Active
                                </div>
                            </td>
                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{$member->created_at->diffForHumans() }}</td>
                            <td class="p-4 space-x-2 whitespace-nowrap">
                                <button type="button" data-modal-toggle="edit-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    Edit user
                                </button>
                                <button wire:model="delete({{$member->id}})"  type="button"  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Delete user
                                </button>
                            </td>
                        </tr>
                
                    </tbody>
                  
                </table>
                           
        
