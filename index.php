<!DOCTYPE html>
<html class="h-full bg-gray-100 m-0">
 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <script src="https://cdn.tailwindcss.com"></script>
 </head>
 <body class="h-full m-0 font-sans">
   <div id="app">

   

    <div class="grid lg:grid-cols-2 grid-cols-1 gap-2 min-h-screen text-gray-500">


      <div class="">

        <div class="container mx-auto px-2 py-6 w-full">
          <div class="relative h-screen rounded-md border">
            <!-- <p class="p-3">Some content here.</p> -->

            <div class="w-[95%] p-4 text-center justify-center bg-white border border-gray-200 rounded-lg shadow sm:p-2 absolute flex top-2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <span class="">
                <div class="flex flex-row justify-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-7 w-7">
                    <path
                      d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                  </svg>
                  Components
                </div>
              </span>
            </div>
            

            <!-- start heading section -->
            <div id="headingSection" class="h-[150px] m-4 p-4 relative mt-20 rounded-md border">

              <p class="absolute -top-[12px] bg-gray-300 rounded-lg px-3 text-[14px]">Heading</p>
              <div class="absolute -top-3 -right-3">
                <div class="h-[25px] w-[25px] bg-white rounded-[50%] relative">
                  <p id="headingClose" class="text-[25px] absolute -top-[7px] left-[6px] cursor-pointer text-red-500 hover:text-red-700">×</p>
  
                </div>
              </div>

              <div class="">

                <input type="text" id="heading" class="w-full p-[7px] mt-7 focus:outline-none focus:border-blue" placeholder="heading">
             
              </div>



              <div class="grid grid-cols-2 gap-2 text-[14px]">
                <div class="w-[82%]">

                  <div class="flex space-0 rounded-between bg-white  mt-2 rounded-md">

                    <span onclick="changeAlign('left')" class="flex flex-row justify-center border-r-2 pr-3 px-2 py-1 cursor-pointer hover:bg-gray-200">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5 pr-1">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      Left
                      
                    </span>
                    <span onclick="changeAlign('center')" class="flex flex-row justify-center border-r-2 pr-3 px-2 py-1 cursor-pointer hover:bg-gray-200">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5 pr-1">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      Center
                    </span>
                    <span onclick="changeAlign('right')" class="flex flex-row justify-center pr-3 pl-2 py-1 cursor-pointer hover:bg-gray-200">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5 pr-1">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      Right
                    </span>

                    <input type="hidden" name="align" id="align" value=""/>
    
                  </div>

                </div>


                
                <div class="">
                <div class="w-[82%] float-right">

                  <div class="flex space-0 rounded-between bg-white  mt-2 rounded-md">

                    <span onclick="changeColor('blue')" class="flex flex-row justify-center border-r-2 pr-3 px-2 py-1 cursor-pointer hover:bg-gray-200">
                      <div class="rounded-full w-3 h-3 bg-blue-500 mt-1 mr-1"></div>
                      Blue
                      
                    </span>
                    <span onclick="changeColor('black')" class="flex flex-row justify-center border-r-2 pr-3 px-2 py-1 cursor-pointer hover:bg-gray-200">
                      <div class="rounded-full w-3 h-3 bg-gray-500 mt-1 mr-1"></div>
                      Black
                    </span>
                    <span onclick="changeColor('green')" class="flex flex-row justify-center pr-3 pl-2 py-1 cursor-pointer hover:bg-gray-200">
                      <div class="rounded-full w-3 h-3 bg-green-500 mt-1 mr-1"></div>
                      Green
                    </span>

                    <input type="hidden" name="color" id="color" value=""/>
    
                  </div>

                </div>
              </div>


              </div>


            </div>
            <!-- end heading section -->


            <!-- start image upload section -->


            <div id="posterImageSection" class="m-4 p-4 relative mt-7 rounded-md border">

              <p class="absolute -top-[12px] bg-gray-300 rounded-lg px-3 text-[14px]">Poster Image</p>
              <div class="absolute -top-3 -right-3">
                <div class="h-[25px] w-[25px] bg-white rounded-[50%] relative">
                  <p id="posterClose" class="text-[25px] absolute -top-[7px] left-[6px] cursor-pointer text-red-500 hover:text-red-700">×</p>
  
                </div>
              </div>

              <div class="mt-7 mb-2">


                <div class="max-w-xl" id="drop-area">
                  <label
                      class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                      <span class="flex items-center space-x-2">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                          </svg>
                          <span class="font-medium text-gray-600">
                              Drop files to Attach, or
                              <span class="text-blue-600 underline">browse</span>
                          </span>
                      </span>

                      <!-- <input type="file" id="fileElem" accept="image/*" onchange="handleFile(this.file)"> -->

                      <input type="file" id="fileUpload" name="file_upload" class="hidden">
                  </label>
              </div>
             
              </div>


            </div>


            <!-- end image upload section -->



              <!-- start image upload section -->


              <div id="descSection" class="m-4 p-4 relative mt-7 rounded-md border">

                <p class="absolute -top-[12px] bg-gray-300 rounded-lg px-3 text-[14px]">Description</p>
                <div class="absolute -top-3 -right-3">
                  <div class="h-[25px] w-[25px] bg-white rounded-[50%] relative">
                    <p id="descClose" class="text-[25px] absolute -top-[7px] left-[6px] cursor-pointer text-red-500 hover:text-red-700">×</p>
    
                  </div>
                </div>
  
                <div class="mt-7 mb-2">

                  <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none" placeholder="Write your thoughts here..."></textarea>
               
                </div>
  
  
              </div>
  
  
              <!-- end image upload section -->
  



          </div>
        </div>
      
      </div>

      

    


     

      <div>

        <div class="">

          <div class="container mx-auto px-2 py-6">
            <div class="relative rounded-md border h-screen">
              <!-- <p class="p-3 ">Some content here.</p> -->
              <div class="w-[95%] p-4 text-center justify-center bg-white border border-gray-200 rounded-lg shadow sm:p-2 absolute flex top-2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <span class="">
                  <div class="flex flex-row justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-2 h-8 w-10">
                      <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z"></path>
                      <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z"></path>
                      <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z"></path>
                    </svg>
                    Preview
                  </div>
                </span>
              </div>



              <div class="m-4">

                <div class="mt-20">

                  <h1 id="diaplayHeading" class="text-[45px]"></h1>

                  <div id="preview"></div>

                  <div class="mt-7">
                    <p class="text-[16px]" id="diaplayDescription"></p>
                  </div>


                  <div class="mt-10">
                    <a href="" id="download" class="" download>Download</a>
                  </div>
  
                </div>

              </div>
              



            </div>
          </div>
        
        </div>

      </div>

      

    </div>




   </div>
 </body>
 <script type="text/javascript" src="js/index.js"></script>
</html>