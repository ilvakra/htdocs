<!DOCTYPE html>
<html>

<head>
    <title>Diena 6: html</title>
    <meta charset="utf-8">
</head>

<body>

    <h1 id="top-element">Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>


    <p><span>Lorem ipsum</span> dolor sit amet, consectetur adipisicing elit, sed do <i>eiusmod</i>
        tempor incididunt ut labore et dolore <em>magna aliqua</em>. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco <u>laboris</u> nisi ut aliquip ex ea commodo
        consequat.
    </p>
    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. <strong>Excepteur</strong> sint <b>occaecat </b><br>cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div>kljfskljk</div>

    <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ol>

    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
            <ol>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ol>
    </ul>


    <hr>

    <img attribute="value" src="https://img-aws.ehowcdn.com/877x500p/photos.demandstudios.com/getty/article/151/61/87814855.jpg" width="100%" >


    <a href="https://www.google.com" target="_blank">Links uz google</a>
    <a href="#top-element">Iet uz augšu</a>


    <table border="21">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <tr>
            <td>11</td>
            <td>12</td>
            <td rowspan="2" style="background-color: blue;">13</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <!-- bez rowspan te būtu šūna -->
        </tr>
        <tr>
            <td colspan="3"
            style="background-color: red;">31</td>
            <!-- bez colspan te būtu šūna -->
            <!-- bez colspan te būtu šūna -->
        </tr>
    </table>




</body>

</html>
