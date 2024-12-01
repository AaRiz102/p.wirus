Route::get('/analytics', function () {
    return [
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June'],
        'data' => [120, 190, 300, 500, 200, 300],
    ];
});
