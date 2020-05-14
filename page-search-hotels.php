<?php
require_once('database.php');
?>
<?php get_header(); ?> 

<section class="container-fluid text-center travel care__hero hp__section" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('carefree_bookings_background') ;?>);">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php the_field('carefree_bookings_logo') ;?>" class="img-fluid"/>
        </div>

        <div class="col-md-6 care__callout">
            <?php the_field('carefree_hero_copy') ;?>
        </div>
    </div>
</section>

<section class="container-fluid searchHotels">
    <table class="table" id="hotelTable">
        <thead>
            <tr>
                <th>Hotel Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Opening Date</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $hotels = $otiFlash->query('SELECT * FROM hotels WHERE open_date is not null AND 7d_date is not null')->fetchAll();
                    $maxDate = DateTime::createFromFormat('Y-m-d', '2020-12-31');
                    // $hotels = $otiFlash->query('SELECT * FROM hotels WHERE open_date is not null AND 7d_date is not null')
                    $maxDate = DateTime::createFromFormat('Y-m-d', '2020-12-31');
                    $today = new DateTime('now');
                    $arrayHotelIds = array();
                    foreach ($hotels as $hotel) {
                        if(in_array($hotel->same_as_hotel_id,$arrayHotelIds)){
                            continue;
                        }
                    $arrayHotelIds[] = $hotel->hotel_id;
                    $date = DateTime::createFromFormat('Y-m-d  H:i:s', $hotel->open_date);
                    ?>
                    <tr>
                        <td><?= $hotel->hotel_name ?></td>
                        <td><?= $hotel->hotel_country ?></td>
                        <td><?= $hotel->hotel_city ?></td>
                        <td>
                            <?php if ($date > $maxDate) {
                                echo "No opening Date";
                            }elseif($date < $today){
                                echo "Open";
                            } else {
                                echo $date->format('Y-m-d');
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
</section>

<?php get_footer(); ?>