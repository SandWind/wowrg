<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 04/02/2020 - 6:55 PM
 */
?>
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About the server</h2>
                <p>Game version: <b><span style="color: #007a0c"><?php echo get_config('game_version'); ?></span></b>
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="image">
                        <img src="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/jaina.png"
                             class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                        <h3>Server Information:</h3>
                        <ul>
                            <li><i class="bx bx-check-double"></i>Server type: <b>Blizzlike</b></li>
                            <li><i class="bx bx-check-double"></i>Server Uptime: <b>99.9%</b></li>
                            <li><i class="bx bx-check-double"></i>XP Rate: <b>x4</b></li>
                            <li><i class="bx bx-check-double"></i>Drop Rate: <b>x4</b></li>
                            <li><i class="bx bx-check-double"></i>Start Level: <b>1</b></li>
                            <li><i class="bx bx-check-double"></i>Start Level: <b>1</b></li>
                            <li><i class="bx bx-check-double"></i>Fixed Spells: <b>95%</b></li>
                            <li><i class="bx bx-check-double"></i>Fixed Dungeons: <b>99%</b></li>
                            <li><i class="bx bx-check-double"></i>Fixed Instances: <b>99%</b></li>
                        </ul>
                        <p>
                            Edit on <b>"/template/advance/tpl/server-info.php"</b>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>