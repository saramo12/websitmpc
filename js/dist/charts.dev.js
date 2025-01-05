"use strict";

var ctx = document.getElementById('projectsChart').getContext('2d'); // بيانات الرسم البياني

var data = {
  labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
  // السنوات
  datasets: [{
    label: 'Projects',
    data: [4, 8, 12, 6, 14, 0, 10, 6, 6, 6],
    // عدد المشاريع لكل سنة
    borderColor: '#007BFF',
    // لون الخط
    backgroundColor: 'rgba(0, 123, 255, 0.2)',
    // تعبئة تحت الخط
    borderWidth: 2,
    tension: 0.4 // منحنى الخط

  }]
}; // خيارات الرسم البياني

var options = {
  responsive: true,
  plugins: {
    legend: {
      display: true,
      position: 'top'
    }
  },
  animation: {
    duration: 100,
    // مدة الأنيميشن
    easing: 'easeInOutQuart' // حركة ناعمة

  },
  scales: {
    x: {
      title: {
        display: true,
        text: 'Years'
      }
    },
    y: {
      title: {
        display: true,
        text: 'Projects'
      },
      beginAtZero: true,
      max: 16 // الحد الأقصى للمحور Y

    }
  }
}; // رسم الجراف

new Chart(ctx, {
  type: 'line',
  // نوع الرسم البياني
  data: data,
  options: options
});