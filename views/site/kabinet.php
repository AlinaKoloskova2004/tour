<h2 style="margin-top: 30px;">Записи</h2>
<?php foreach ($bookings as $booking):?>
    <div class="card" style="margin-top:20px;">
        <div class="card-body">
            <h3>ФИО: </h3><p class="" style="font-size: 20px;"><?php echo $booking->surname.' '.$booking->name .' '.$booking->patronymic; ?></p>
            <h3>Возраст: </h3><p class="" style="font-size: 20px;"><?php echo $booking->age; ?></p>
            <h3>Статус бронирования: </h3><p class="" style="font-size: 20px;"><?php echo $booking->getStatus(); ?></p>
            <h3>Тур: </h3><p class="" style="font-size: 20px;"><?php echo $booking->tour->name; ?></p>
        </div>
    </div>
<?php endforeach;?>