@extends('layouts.dashboard')

@section('title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Card Example -->
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">Total Users</h2>
        <p class="text-3xl font-bold">1,245</p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">Monthly Sales</h2>
        <p class="text-3xl font-bold">$4,500</p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">New Visitors</h2>
        <p class="text-3xl font-bold">678</p>
    </div>
</div>

<!-- Chart Example -->
<div class="bg-white p-6 mt-6 rounded shadow">
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Visitors',
                data: [120, 190, 300, 500, 200, 300],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
    });
</script>
@endsection
