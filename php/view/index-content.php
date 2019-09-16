<section>
    <h2>A faire</h2>
    <div class="category">
        <div class="quick_create">
            <form action="index.php" method="post">
                <div class="quick_text">
                    <input type="text" name="task_name" placeholder="Ajouter une tâche" id="quick_create">
                    <input type="hidden" name="action" value="quick_create">
                    <input type="hidden" name="form_name" value="quick_create">
                </div>
                <div class="quick_submit">
                    <button></button>
                </div>
            </form>
        </div>

        <div id="container_tasks">
            <div class="task">
                <div class="task_checkbox">
                    <input type="checkbox" name="done" class="done" id="done"><label for="done"></label>
                </div>
                <div class="task_body">
                    <div class="calendar">
                        <div class="calendar_icon">
                            <img src="assets/images/calendar.png" width="25px" height="25px">
                        </div>
                        <div class="calendar_date">
                            <p>Date butoire : 16/09/2019</p>
                        </div>
                    </div>
                    <h3>Acheter des patates</h3>
                    <p>Les patates, c'est la vie !</p>
                </div>
                <div class="task_menu">
                    <img src="assets/images/menu_profil.png" width="40px" height="40px" id="menu_toggle" class="menu_toggle">
                    <ul class="mini_menu" id="mini_menu">
                        <li class="mini_menu_item"><img src="assets/images/edit.png" width="25px" height="25px">Modifier</li>
                        <li class="mini_menu_item delete"><img src="assets/images/delete.png" width="25px" height="25px">Effacer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>