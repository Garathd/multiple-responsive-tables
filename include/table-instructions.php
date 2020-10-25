<link rel="stylesheet" href="<?php echo plugins_url('/assets/css/responsive-table.css', __FILE__); ?>">
<script src="<?php echo plugins_url('/assets/js/jquery.min.js', __FILE__); ?>"></script>
<script src="<?php echo plugins_url('/assets/js/responsive-table.js', __FILE__); ?>"></script>


<div class="responsive-table-instructions-header">

    <p>To use Responsive Tables on a page you must first use the below shortcode to initialize:</p>
    <p><strong>[responsive_table_init]</strong></p>

    &nbsp;

    <p>Following this you must wrap each table in the following shortcode:</p>
    <p><strong>[responsive_table][/responsive_table]</strong></p>

</div>

&nbsp;

<div class="responsive-table-instructions-content">
    <h3>Code Example:</h3>
    <xmp>
    [responsive_table_init]
    [responsive_table]
    <table>
        <tbody>
            <tr>
                <th>TEAM NAME</th>
                <th>WINS</th>
                <th>LOSSES</th>
            </tr>
            <tr>
                <td>Team A</td>
                <td>26</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Team B</td>
                <td>27</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Team C</td>
                <td>22</td>
                <td>10</td>
            </tr>
        </tbody>
    </table>
    [/responsive_table]

    &nbsp;

    [responsive_table]
    <table>
        <tbody>
            <tr>
                <th>COUNTRY</th>
                <th>CAPITAL</th>
            </tr>
            <tr>
                <td>Ireland</td>
                <td>Dublin</td>
            </tr>
            <tr>
                <td>Portugal</td>
                <td>Lisbon</td>
            </tr>
            <tr>
                <td>Spain</td>
                <td>Madrid</td>
            </tr>
            <tr>
                <td>Italy</td>
                <td>Rome</td>
            </tr>
        </tbody>
    </table>
    [/responsive_table]
    </xmp>

    &nbsp;

    <h3>Code Preview:</h3>
    <div id="custom-css"></div>
    <div class="responsive-table-container">
        <table>
            <tbody>
                <tr>
                    <th>TEAM NAME</th>
                    <th>WINS</th>
                    <th>LOSSES</th>
                </tr>
                <tr>
                    <td>Team A</td>
                    <td>26</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Team B</td>
                    <td>27</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Team C</td>
                    <td>22</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="responsive-table-container">
        <table>
            <tbody>
                <tr>
                    <th>COUNTRY</th>
                    <th>CAPITAL</th>
                </tr>
                <tr>
                    <td>Ireland</td>
                    <td>Dublin</td>
                </tr>
                <tr>
                    <td>Portugal</td>
                    <td>Lisbon</td>
                </tr>
                <tr>
                    <td>Spain</td>
                    <td>Madrid</td>
                </tr>
                <tr>
                    <td>Italy</td>
                    <td>Rome</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>