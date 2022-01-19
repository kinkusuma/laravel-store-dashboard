<!DOCTYPE html>
<html>

<head>
  <title>Sales Dashboard</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
  <div class='w-screen h-screen p-5 bg-zinc-50'>

    <!-- HEADER  -->
    <div class='w-full grid grid-cols-7 gap-2'>

      <!-- LOGO -->
      <div class='h-14 col-start-1 col-span-2'>
        <h3 class='text-xl font-semibold whitespace-nowrap overflow-hidden'>Sales Overview</h3>
        <p class='text-md text-gray-500'>18 January 2022</p>
      </div>

      <!-- SEARCH BAR -->
      <div class='h-14 col-start-4 col-span-2 grid content-end'>
        <div class='h-10 px-3 flex items-center content-center rounded-lg bg-gray-100'>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
          <input class='w-full h-10 mx-2 border-0 outline-none bg-transparent' type='text' name='' id='' placeholder='Search items by name'>
        </div>
      </div>

      <!-- ACCOUNT -->
      <div class='h-14 col-start-6 col-span-2 grid content-end'>
        <div class='h-10 flex items-center justify-end gap-2'>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
          </svg>
          <div class="py-1 px-3 flex items-center justify-self-end gap-2 border border-zinc-300 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <p class="w-24">John Doe</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- CONTAINER -->
    <div class="w-full grid grid-cols-7 gap-2 py-3">

      <!-- LEFT -->
      <div class="col-start-1 col-span-5">

        <!-- SUMMARY -->
        <div class='w-full h-28 my-3 grid grid-cols-4 gap-3 justify-items-stretch'>

          <!-- CARDSUMMARY  -->
          <div class='w-full p-3 rounded-lg bg-white'>
            <div class="flex gap-2 items-center">
              <svg class='text-blue-500' xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
              </svg>
              <p class='font-semibold text-lg text-blue-500'>Total Sales</p>
            </div>
            <div class='h-6 my-2 text-lg font-semibold flex gap-1'>
              Rp.981.129.992
              <div class='ml-3 text-sm font-bold text-blue-500 self-end'>
                +35%
              </div>
            </div>
            <p class='text-xs text-gray-500'>Compared to Rp.789.312.221</p>
          </div>

          <!-- CARDSUMMARY  -->
          <div class='w-full p-3 rounded-lg bg-white'>
            <div class="flex gap-2 items-center">
              <svg class='text-rose-500' xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
              </svg>
              <p class='font-semibold text-lg text-rose-500'>Total Customer</p>
            </div>
            <div class='h-6 my-2 text-lg font-semibold flex gap-1'>
              9.312 Customer
              <div class='ml-3 text-sm font-bold text-rose-500 self-end'>
                +15%
              </div>
            </div>
            <p class='text-xs text-gray-500'>Compared to 7.879 customer</p>
          </div>

          <!-- CARDSUMMARY  -->
          <div class='w-full p-3 rounded-lg bg-white'>
            <div class="flex gap-2 items-center">
              <svg class='text-orange-500' xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
              </svg>
              <p class='font-semibold text-lg text-orange-500'>Total Items</p>
            </div>
            <div class='h-6 my-2 text-lg font-semibold flex gap-1'>
              9.883 Items
              <div class='ml-3 text-sm font-bold text-orange-500 self-end'>
                +35%
              </div>
            </div>
            <p class='text-xs text-gray-500'>Compared to 7.731 items</p>
          </div>

          <!-- CARDSUMMARY  -->
          <div class='w-full p-3 rounded-lg bg-white'>
            <div class="flex gap-2 items-center">
              <svg class='text-green-500' xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
              </svg>
              <p class='font-semibold text-lg text-green-500'>Total Categories</p>
            </div>
            <div class='h-6 my-2 text-lg font-semibold flex gap-1'>
              34 Categories
              <div class='ml-3 text-sm font-bold text-green-500 self-end'>
                +10%
              </div>
            </div>
            <p class='text-xs text-gray-500'>Compared to 22 Categories</p>
          </div>
        </div>

        <!-- TIMESERIES CHART -->
        <div class="w-full h-80 mt-7 mb-3 ">
          <canvas height="100" id="sales-timeseries"></canvas>
        </div>

        <!-- TABLE -->
        <div class="w-full h-80 mt-7 mb-3 px-3">
          <p class="font-semibold text-lg pt-3">
            Recent Sales
          </p>
          <p class="text-sm text-gray-400 pb-3">
            Most recent sales in the store
          </p>
          <table class="w-full h-72">
            <tr class="grid grid-cols-9 justify-items-start">
              <th class="col-span-2 font-normal text-gray-500">
                Sale date
              </th>
              <th class="col-span-2 font-normal text-gray-500">
                Buyer name
              </th>
              <th class="col-span-2 font-normal text-gray-500">
                Total price
              </th>
              <th class="col-span-2 font-normal text-gray-500">
                Status
              </th>
            </tr>
            <div class=" overflow-auto">
              @foreach ($sales as $data)
              <tr class="py-1 grid grid-cols-9 justify-items-start rounded-lg hover:bg-gray-300 border-t border-gray-300">
                <td class="col-span-2 font-medium">
                  {{ $data -> sale_date }}
                </td>
                <td class="col-span-2 font-medium">
                  {{ $data -> customer }}
                </td>
                <td class="col-span-2 font-medium">
                  {{ $data -> total_price }}
                </td>
                <td class="col-span-2 font-medium">
                  {{ $data -> status }}
                </td>
                <td class="font-medium justify-self-end">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                </td>
              </tr>
              @endforeach
            </div>
          </table>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-start-6 col-span-2">
        <!-- STORE INFO  -->
        <div class="w-full h-28 my-3">
          <div class="w-full h-14 py-1 flex justify-center items-center gap-3 border-b border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
            </svg>
            <p class="font-semibold text-lg">ABCD STORE</p>
          </div>
          <div class="w-full h-14 py-1 grid grid-cols-3 gap-2">
            <div class="border-r border-gray-300 grid justify-items-center">
              <p class="font-semibold text=lg">1200</p>
              <p class="font-normal">Products</p>
            </div>
            <div class="border-r border-gray-300 grid justify-items-center">
              <p class="font-semibold text=lg">7831291</p>
              <p class="font-normal">Customers</p>
            </div>
            <div class="border-r border-gray-300 grid justify-items-center">
              <p class="font-semibold text=lg">8 Year</p>
              <p class="font-normal">Experience</p>
            </div>
          </div>
        </div>

        <!-- BAR CHART -->
        <div class="w-full h-80 mt-7 mb-3">
          <canvas height="250" id="sales-bar"></canvas>
        </div>

        <!-- PIE CHART -->
        <div class="w-full h-80 mt-7 mb-3">
          <canvas height="250" id='sales-pie'></canvas>
        </div>

      </div>

    </div>

    <script>
      const sales = <?php echo $sales; ?>;
      const salesDetailCategory = <?php echo $salesDetailCategory; ?>;
      const salesDaily = <?php echo $salesDaily; ?>;
      new Chart(document.getElementById("sales-timeseries"), {
        type: 'line',
        data: {
          labels: sales.map((i) => {
            return i.sale_date;
          }),
          datasets: [{
            data: sales.map((i) => {
              return i.total_price;
            }),
            label: "Sales Daily Total per Customer",
            borderColor: "#3B82F6",
            fill: false
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Sales Figures',
            fontSize: 18,
            fontColor: "#111"
          },
          legend: {
            display: true,
            labels: {
              fontColor: "#333",
              fontSize: 12
            }
          }
        }
      });

      new Chart(document.getElementById("sales-bar"), {
        type: 'bar',
        data: {
          labels: salesDaily.map((i) => {
            return i.day_name;
          }),
          datasets: [{
            label: "Sales per Day",
            data: salesDaily.map((i) => {
              return i.total;
            }),
            backgroundColor: ["#3B82F6", "#F97316", "#3B82F6", "#F97316", "#3B82F6", "#F97316", "#3B82F6"],
            borderWidth: 2,
            borderRadius: 50,
            borderSkipped: false,
            scaleOverride: true,
            scaleSteps: 10,
            scaleStepWidth: 50,
            scaleStartValue: 0
          }]
        },
        options: {
          responsive: true,
          legend: {
            display: false
          },
          title: {
            display: true,
            text: 'Sales per Day',
            fontSize: 18,
            fontColor: "#111"
          },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }],
            xAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
        },
      });

      new Chart(document.getElementById("sales-pie"), {
        type: 'doughnut',
        data: {
          labels: salesDetailCategory.map((i) => {
            return i.category;
          }),
          datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#3B82F6", "#F97316", "#22C55E", "#F43F5E"],
            data: salesDetailCategory.map((i) => {
              return i.total;
            }),
          }]
        },
        options: {
          title: {
            display: true,
            text: 'Sales per Category',
            fontSize: 18,
            fontColor: "#111"
          }
        }
      });
    </script>
</body>

</html>
