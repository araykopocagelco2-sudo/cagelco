// Function to request notification permission
function requestNotificationPermission() {
  if (Notification.permission === "default") {
    Swal.fire({
      title: "Enable Notifications",
      text: "Would you like to receive notifications?",
      icon: "info",
      showCancelButton: true,
      confirmButtonText: "Yes, allow",
      cancelButtonText: "No, thanks",
    }).then((result) => {
      if (result.isConfirmed) {
        Notification.requestPermission().then((permission) => {
          if (permission === "granted") {
            console.log("Notification permission granted.");
            // Call function to register service worker and get FCM token
            registerServiceWorkerAndGetToken();
          } else {
            console.log("Notification permission denied.");
          }
        });
      } else {
        console.log("User chose not to receive notifications.");
      }
    });
  } else if (Notification.permission === "granted") {
    console.log("Notification permission already granted.");
    // Call function to register service worker and get FCM token
    registerServiceWorkerAndGetToken();
  } else {
    console.log("Notification permission denied.");
  }
}

// Firebase Messaging Service Worker
self.addEventListener("push", (event) => {
  let notif;
  // Attempt to parse the notification data
  try {
    notif = event.data.json().notification;
    console.log("Notification Data:", notif); // Log the notification data
  } catch (e) {
    console.error("Error parsing notification data:", e);
    notif = {
      title: "Default Title",
      body: "Default notification body",
      icon: "default-icon.png", // Change to your icon path
      click_action: "https://online.cagelco2.org.ph/pi_notice.php", // Use absolute URL
    };
  }

  event.waitUntil(
    self.registration.showNotification(notif.title, {
      body: notif.body,
      icon: notif.icon, // Use icon from notification
      data: {
        url: notif.click_action || "https://online.cagelco2.org.ph/", // Fallback URL
      },
    })
  );
});

self.addEventListener("notificationclick", (event) => {
  event.notification.close(); // Close the notification
  console.log("Notification clicked:", event.notification.data); // Log notification data

  // Ensure URL exists before trying to open it
  if (event.notification.data && event.notification.data.url) {
    console.log("Opening URL:", event.notification.data.url); // Log the URL being opened
    event.waitUntil(clients.openWindow(event.notification.data.url));
  } else {
    console.error("Notification click: URL is undefined");
  }
});
