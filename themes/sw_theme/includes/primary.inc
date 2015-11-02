
<nav class="sbNav">

    <div class="sbContainer">

        <div class="navigation-block">

            <span class="swSearchBlock"><?php print render($page['nav']); ?></span>


        </div>




        <?php include DRUPAL_ROOT . '/sites/all/themes/sw_theme/includes/social.php'; ?>



        <ul class="swNavigation" >
            <li class="swOne medium-medium">
                <a href="<?php print base_path();?>"curriculum-mapping-general">
                    Services
                </a>
                <div class="swDropContainer medium">
                    <div class="col1">
                        <ul>
                            <li><a href="<?php print base_path();?>curriculum-mapping-general">Lawn Care</a></li>
                            <li><a href="<?php print base_path();?>curriculum-mapping-general#Curriculum%20Mapping%20Model">Aeration</a></li>
                            <li><a href="<?php print base_path();?>curriculum-mapping-general#Curriculum%20Mapping%20Focuses">PineStraw</a></li>
                            <li><a href="<?php print base_path();?>curriculum-mapping-general#Curriculum%20Mapping%20and%20Change">Mapping and Change</a></li>
                            <li><a href="<?php print base_path();?>curriculum-mapping-general#The%20Curriculum%20Mapping%20Journey">The Journey</a></li>
                        </ul>
                    </div>
                    <div class="col2">

                        <a href="<?php print base_path();?>videos/curriculum-mapping/videos">
                            <h2>Curriculum Mapping Videos</h2>
                        </a>
                        <?php
                        //                    $block = module_invoke('views', 'block_view',
                        //                            'navigator_blocks-cm_videos');
                        //                    print render($block);
                        ?>
                        <a href="<?php print base_path();?>videos/curriculum-mapping/videos">
                            More Curriculum Mapping Videos
                        </a>
                    </div>
                </div>

            </li>


            <li><a href="#"><i class="icon-diamond"></i>Curriculum Design</a></li>

            <li><a href="#"><i class="icon-arrows-cw-outline"></i>Standards</a></li>


            <li class="swTwo medium-medium"><a href="<?php print base_path();?>resources"><i class="icon-pin"></i>Resources</a>
                <div class="swDropContainer large">
                    <div class="col1">
                        <ul>
                            <li><a href="<?php print base_path();?>resources/curriculum-mapping-powerpoint-presentations">Janet's Curriculum Mapping PowerPoint Presentations </a></li>
                            <li><a href="<?php print base_path();?>resources/curriculum-mapping-handouts">Curriculum Mapping Handouts </a></li>
                            <li><a href="<?php print base_path();?>resources/curriculum-maps-sample-monthsunits">Curriculum Maps Sample Months/Units </a></li>
                            <li><a href="<?php print base_path();?>resources/creating-quality-maps-design-mind-reminder-guides">Creating Quality Maps With Design in Mind Reminder Guides</a></li>
                        </ul>
                    </div>
                    <div class="col2">
                        <h2>Popular Downloads</h2>
                        <ul>
                            <li>
                                <img class="file-icon" alt="" title="application/msword" src="/clients/cm101/modules/file/icons/x-office-document.png">
                                <a class="file-link" href="<?php print base_path();?>sites/default/files/01-Proj-Diary-AECitiz.doc" type="application/msword; length=59904" title="01-Proj-Diary-AECitiz.doc">Projected/Diary Map Adult Education Citizenship</a>
                            </li>
                            <li>
                                <img class="file-icon" alt="" title="application/msword" src="/clients/cm101/modules/file/icons/x-office-document.png">
                                <a class="file-link" href="<?php print base_path();?>sites/default/files/Content-Math_0.pdf" type="application/msword; length=59904" title="01-Proj-Diary-AECitiz.doc">Content Exercise -- Mathematics</a>
                            </li>
                            <li>
                                <img class="file-icon" alt="" title="application/msword" src="/clients/cm101/modules/file/icons/x-office-document.png">
                                <a class="file-link" href="<?php print base_path();?>sites/default/files/Skill-vs-Activity-Mixed_0.pdf" type="application/msword; length=59904" title="01-Proj-Diary-AECitiz.doc">Skills Versus Activities Exercise --Mixed Disciplines</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </li>

            <li><a href="#"><i class="icon-mail"></i>Contact</a></li>






        </ul>

    </div>


</nav>

