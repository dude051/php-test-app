<!DOCTYPE html>
<html>
<head>
  <title>Rackspace Automation Service Java Test App</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="https://eafdbc63c97ce6bec9ef-b0a668e5876bef6fe25684caf71db405.ssl.cf1.rackcdn.com/v1-latest/canon.min.css">
  <script type="application/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script type="application/javascript" src="https://eafdbc63c97ce6bec9ef-b0a668e5876bef6fe25684caf71db405.ssl.cf1.rackcdn.com/v1-latest/canon.min.js"></script>
</head>

<body class="rs-responsive">
<div class="rs-wrapper">
    <!-- Utility Nav -->
    <div class="rs-nav-utility">
      <div class="rs-container">
        <ul class="rs-nav">
        </ul>
      </div>
    </div>
    <!-- End Utility Nav -->
    <!-- Primary Nav -->
    <div class="rs-nav-primary">
      <div class="rs-container">
        <div class="rs-nav-brand">
          <a href=""></a>
        </div>
      </div>
    </div>
    <!-- End Primary Nav -->
    <div class="rs-body">
      <div class="rs-container">
        <div class="rs-main">
        <div class="rs-content rs-panel">
          <div class="rs-inner">
            <h2 class="rs-page-title">Service status</h2>
            <p><?php echo $this->data['message']; ?></p>
            <div class="rs-list-Table">
              <table>
                <thread>
                  <tr>
                    <th class="rs-table-status"></td>
                    <th class="rs-table-checkbox"><input type="checkbox" /></td>
                    <th>Service Name</th>
                    <th>Status</th>
                  </tr>
                </thread>

                <!--   Place Holder for each item -->
                <tr>
                  <td class="rs-table-status <?php echo $this->data['table_status']; ?>"></td>
                  <td class="rs-table-checkbox"><input type="checkbox" /></td>
                  <td class="rs-table-text">MySQL Service</td>
                  <td class="rs-table-status-list">
                    <ul class="rs-status-list">
                      <li class="rs-status-list-item tooltip-toggle">
                        <div class="rs-icon-status <?php echo $this->data['icon_status']; ?>"></div>
                        <?php echo $this->data['check_status']; ?>
                      </li>
                    </ul>
                  </td>
                </tr>
                <!--   End of Place Holder -->
                </tbody>
              </table>
            </div>
            </div>
            </div>
            </div>
          </div>
       <div class="rs-push"></div>
     </div>
    <!-- End Content Area -->

  <!-- Footer Area -->
  <div class="rs-nav-footer">
    <div class="rs-container">
      <ul class="rs-nav">
        <li class="rs-nav-item">&copy; Rackspace, US</li>
        <li class="rs-nav-item"><a class="rs-nav-link" href="http://www.rackspace.com/information/legal/websiteterms" target="blank">Website Terms</a>
        <li class="rs-nav-item"><a class="rs-nav-link" href="http://www.rackspace.com/information/legal/privacystatement" target="blank">Privacy Policy</a>
      </ul>
    </div>
  </div>
  <!-- End Footer Area -->
</body>
</html>
