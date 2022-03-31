<div class="sidebar-content">
    <div class="d-flex justify-content-between mb-1">
        <div class="title">Service History</div>
        <div class="title-btn"><a href="#" id="Export">Export</a></div>
    </div>
    <div class="" id="ups">
        <table class="table2" id="table2">
            <tr class="th text-center">
                <th onclick="sortTable(0)">Service Details <img src="assets/images/sort.png" alt=""></th>
                <th onclick="sortTable(1)">Service Provider <img src="assets/images/sort.png" alt=""></th>
                <th onclick="sortTable(2)">Payment <img src="assets/images/sort.png" alt=""></th>
                <th onclick="sortTable(3)">Status <img src="assets/images/sort.png" alt=""></th>
                <th>Rate SP </th>
            </tr>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
    <div class="table-footer mt-3">
        <div class="drop-record mb-3">
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