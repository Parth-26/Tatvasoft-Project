$(#usrequest).click(function()
{
    fetch_userdata();
})
function fetch_userdata()
{
    var limit=$(#limit).val();
    $.ajax({
        url:"",
        type:"POST",
        data:{limit:limit},
        success:function(result)
        {
            const Data=JSON.parse(result);
            showUserData(Data.record);
        }
    });
    function showUserData(users) {
        var userHtml = "";
        users.forEach(function (user) {
          const obj = getTimeAndDate(user.CreatedDate, 1.0);
          userHtml += `<tr class="text-center">
                          <td><span>${user.FullName}</span></td>
                          <td><span>`;
                          if(user.UserTypeId == 1){
                            userHtml += `Customer`;
                          }
                          else if(user.UserTypeId == 2){
                            userHtml += `Servicer`;
                          }
                          else if(user.UserTypeId == 3){
                            userHtml += `Admin`;
                          }
                          userHtml += `</span></td>
                          <td><span><img src="assets/images/calendar2.png" alt=""> ${obj.startdate}</span></td>
                          <td><span>${user.Mobile}</span></td>
                          <td><span>`;
                          if(user.PostalCode != null){
                            userHtml += `${user.PostalCode}`;
                          }
                          if(user.IsApproved == 1){
                            userHtml += `</span></td>
                              <td><a>Active</a>`;
                          }
                          else if(user.IsApproved == 0){
                            userHtml += `</span></td>
                            <td><a class="Inactive">InActive</a>`;
                          }
                          userHtml += `</td>
                          <td class="action">
                            <div class="dropdown">
                              <button class="dropdown-toggle" type="button" id="ActionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/group-38.png" alt="">
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="ActionMenu">
                                <li class="dropdown-item">`;
                                if(user.IsApproved == 1){
                                  userHtml += `<a href="#" data-userid="${user.UserId}" data-approved="${user.IsApproved}" class="Is-Approved">Deactivate</a>`;
                                }
                                else if(user.IsApproved == 0){
                                  userHtml += `<a href="#" data-userid="${user.UserId}" data-approved="${user.IsApproved}" class="Is-Approved">Activate</a>`;
                                }
                                userHtml += `</li>
                              </ul>
                            </div>
                          </td>
                        </tr>`;
        });
        $('.table2 .tbody').html(userHtml);
      };
}