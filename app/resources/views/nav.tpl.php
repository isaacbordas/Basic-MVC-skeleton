<div class="nav-container">
    <a id="top"></a>
    <nav>
        <div class="nav-bar">
            <div class="module left">
                <a href="/">
                    <img class="logo" src="/assets/img/logo.png" alt="<?php echo payslips; ?>" />
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#">
                                <?php echo gestion; ?>
                            </a>
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="users/createUser"><?php echo new_usr; ?></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <div class="module widget-handle language left">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#"><?php echo $session->get('USER','name'); ?></a>
                            <ul>
                                <li>
                                    <a href="#"><?php echo profile; ?></a>
                                </li>
                                <li>
                                    <a href="/login/logout"><?php echo logout; ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#"><?php echo strtoupper($session->get('USER','lang')); ?></a>
                            <ul>
                                <li>
                                    <a href="/frontal/changeLang/<?php echo ($session->get('USER','lang') == 'es' ? 'ca' : 'es'); ?>"><?php echo strtoupper(($session->get('USER','lang') == 'es' ? 'ca' : 'es')); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
