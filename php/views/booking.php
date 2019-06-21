<section id="section-reserve">
<body>
    <div id="body-container">
    <table>
        <thead>
            <tr>
                <th>Naam?? (<- hebben we deze nodig?)</th>
                <th>Plekken</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($_rooms as $room) {
                    echo('
                            <tr>
                            <td>' . $room->name . '</td>
                            <td>' . $room->availability . '</td>
                            <td>' . $room->price . '</td>
                            </tr>
                        ');
                }
            ?>
        </tbody>
    </table>

 </div>
<script src="js/custom.js"></script>
</body>
