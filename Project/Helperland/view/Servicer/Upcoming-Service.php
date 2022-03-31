<div class="sidebar-content">
    <div class="main " id="ups">
        <table class="table2" id="table">
            <tr class="th text-center">
                <th onclick="sortTable(0)">Service ID <img src="assets/images/sort.png"></th>
                <th onclick="sortTable(1)">Service date <img src="assets/images/sort.png"></th>
                <th onclick="sortTable(2)">Customer details <img src="assets/images/sort.png"></th>
                <th onclick="sortTable(3)">Payment <img src="assets/images/sort.png"></th>
                <th>Distance</th>
                <th>Actions</th>
            </tr>
            <tbody class="tbody">
                
            </tbody>
        </table>
    </div>
    <div class="table-footer mt-3">
        <div class="drop-record">
            Show
            <select name="number" id="number">
            <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
            </select>
            entries Total Record: <span id="totalrequest">0</span>
        </div>
        <div class="pagination" id="pagination">

        </div>
    </div>
</div>