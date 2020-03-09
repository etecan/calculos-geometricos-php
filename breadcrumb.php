
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li class="is-active">
                        <a href="#">
                            <span class="icon is-small">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </span>
                            <span>
                            <?php 
            $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
            foreach($crumbs as $crumb){
                echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
            }
            ?></span>
                        </a>
                    </li>
                </ul>
            </nav>

