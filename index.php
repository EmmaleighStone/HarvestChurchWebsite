<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Harvest Church - Aurora, MO</title>
    </head>
    <header>
        <nav>
            <ul>
                <li><a class="active" href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Ministries</a></li>
                <li><a href="">Give</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1>Harvest Church</h1>
        <h2>Home</h2>
        <div class="video">
            <video></video>
            <button onclick="window.location.href='https://youtube.com' ;">Watch more on YouTube!</button>
        </div>
        <div class="calendar">
            <h3>January</h3>
            <table>
                <thead>
                    <tr>
                        <!-- Here we have applied inline style 
                             to make it more attractive-->
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>sat</th>
                    </tr>
                </thead>
                  
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="agenda" float="right">
            <h3>Upcoming Events</h3>
            <ul>
                <li>1/13 Womens Bible Study</li>
                <li>1/29 Tent Revival</li>
            </ul>
        </div>
        <div class="prayerForm">
            <form action="process-prayer-form.php" method="post">
                <h1>Prayer Request</h1>
                <label for="fname">First Name:</label>
                <input type="text" name="first" placeholder="John" id="firstP">
                <label for="lname">Last Name:</label>
                <input type="text" name="last" placeholder="Doe" id="lastP">
                <label for="email">Email Address:</label>
                <input type="text" name="email" placeholder="johndoe@email.com" id="emailP">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" placeholder="(555)-555-5555" id="phoneP">
                <label for="description">Short Description of Prayer Request: </label>
                <textarea type="text" name="descriptionP" placeholder="type here" id="descriptionP"></textarea>
                <button>Submit Prayer Request</button>
                
            </form>
        </div>
        <div class="questionForm">
            <form action="process-question-form.php" method="post">
                <h1>Ask Pastor a Question</h1>
                <label for="fname">First Name:</label>
                <input type="text" name="firstN" placeholder="John" id="firstP">
                <label for="lname">Last Name:</label>
                <input type="text" name="lastN" placeholder="Doe" id="lastP">
                <label for="email">Email Address:</label>
                <input type="text" name="emailA" placeholder="johndoe@email.com" id="emailP">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phoneN" placeholder="(555)-555-5555" id="phoneP">
                <label for="description">Short Description of Question: </label>
                <textarea type="text" name="descriptionQ" placeholder="type here" id="descriptionQ"></textarea>
                <button>Submit Question to Pastor</button>
                
            </form>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>