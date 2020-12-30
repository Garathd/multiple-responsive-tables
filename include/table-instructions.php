<div class="responsive-instructions">
    <div class="responsive-table-instructions-header">
        <h2 class="responsive-instructions-heading" id="use-shortcodes">How to use (Shortcodes):</h2>

        <p>To use Responsive Tables on a page you must first use the below shortcode to initialize:</p>
        <p><strong>[responsive_table_init]</strong></p>

        &nbsp;

        <p>Following this you must wrap each table in the following shortcode:</p>
        <p><strong>[responsive_table][/responsive_table]</strong></p>

        &nbsp;

        <p>If you want to use different css styles you can set an ID on the shortcode</p>
        <p><strong>[responsive_table id="red-table"]</strong></p>

    </div>

    &nbsp;

    <div class="responsive-table-instructions-content">
        <h2 class="responsive-instructions-heading" id="code-example">Code Example:</h2>
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

        <h2 class="responsive-instructions-heading" id="code-preview">Code Preview:</h2>
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

        &nbsp;

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

    <div class="responsive-table-css">
        <h2 class="responsive-instructions-heading" id="css-styles">Changing the CSS (Tips to override):</h2>

        <p>The styles below are ok to override if you want to change colors or font styles and sizes</p>

        <strong>Desktop Version</strong>

        <xmp>
        /* Styles the main part of the table */
        .responsive-table-container {
            background: #FFFFFF;
            color: #555555;
            font-family: 'Roboto';
            font-size: 13px;
            font-weight: 400;
        }

        /* Table Headings */
        .responsive-table-container th {
            color: #555555;
            background: #DDD;
            font-family: 'Roboto';
            font-size: 12px;
            font-weight: 600;
        }

        /* For All Devices Above 600px */
        @media only screen and (min-width: 600px) {

            /* Styles the background color off every odd table row */
            .responsive-table-container tr:nth-child(odd) {
                background: #F2F2F2;
            }
        }
        </xmp>

        <strong>Mobile Version</strong>

        <xmp>
        /* For All Devices Below 600px */
        @media only screen and (max-width: 600px) {

            /* Background color on first cell */
            .responsive-table-container td:nth-child(1) {
                background: #DDD;
            }

            /* Mobile Table Header */
            .responsive-table-container td:before {
                font-weight: 600;
            }
        }

        </xmp>

    </div>
</div>