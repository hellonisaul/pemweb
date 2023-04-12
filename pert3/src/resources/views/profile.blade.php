@extends('layouts.main')

@section('content')
    <!-- <div><h1><center>INI HALAMAN PROFILE</center></h1></div> -->
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHYAqgMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYBAwQCB//EADoQAAEDAwMBBQUGBAcBAAAAAAEAAgMEBRESITFBBhNRYXEHIoGRoRQVMkJSwSNisdEkQ1NyguHwF//EABoBAAIDAQEAAAAAAAAAAAAAAAAEAgMFAQb/xAAmEQACAgEEAQQCAwAAAAAAAAAAAQIDEQQSITETBRRBUSIyM1Kx/9oADAMBAAIRAxEAPwD7iiIgAiIgAiIgAiLBQBlFyV1wp6FmqeTB6NG5PwUHP2iqZD/hadrG9HP3PyVc7YR7ZZCqc+kWZMqmy3i6N3dMBngBgWv74uY3+0nPgWAhVe6gW+1mXdFUoO0tZHjv4GSt6lvulTVvvVJXHQx/dy/ofsfh4qyNsJfJVKqce0SaLCyrSsIiIAIiIAIiIAIiIAIiIAIiIAKNuVc6P+DBvKeT+ldtRJ3cTneAUPnLi47uPJVF02uEXUw3PLOIUZc4vlJe87klZNMM7D6Ls1ISkpVZG9zI6WnxuRlGUpkHAaF1knODx4r1+EYC5GHPJLLOZ1LEBgjKj6uhhd7wBa4cEdFKSOXJMdlJ4+Cceezos17kp5W0lweXsJwyZ3I8A7+6tAOcL53VnYqy9kK81VG6nkdl9OcA55aePluE1TY3wxPUU7fyRYEREyKhERABERABERABERABEWCgDmuJxSvKiNWV33Ssiaw04y6R+3u/l9VGNOQlb01Ia07TTPeU1BeSvBVGRnBsc4Lw523K8krXI7ZcbJKJiR65J37La45XJUHZRLkjhrJNipLsHKfvOoZ0MWfqP7qEq35OFOdgxHHVVMsrtLnNaxmevJP9Ar6l+SFdS0oMvKLAWU6ZwREQAREQAREQAREQB5c4NBJOABkkqMmrnTOLYgWxfq6u9PJbLjMXPbTN4I1Senh8VwzO7t2lhwenkrIQyL22Y4RpqnMYCON8bdVqa7BwVquMbZoQwZbgg7FbHt0wd4SchmSQCTx4DlJ6xvft+h/0+MfG557ZtJXklV+53d1viinnFZDHM4tjc+kkaCcE43G2wPIUDT+0q0PfgVbHgg7mNzf2/ZLbZfQ7uh/ZF7JWmR2VDx301T2thh2BGrnOPiAuSvvxpY3FzGs0tJLndAOSodlqWFknJJAAVH1MwVQq+08L5jFU3KCB2AdEj9Gx3BwN9wtlPWUVRHrjrKKZmcamuHPh6qag/k55Iv5JSR5e5S9nnFPBknZzs7dTxhQjdhnHTlddiaJHyNIOlxzu7O/OU3pJJWYfyZ3qEZSpck+i+W+6uZL3FUToP4ZXePgVNgqoUrhMTBI0F42Pmp+0T6mPp3uy6LjfJLeicthjlGfRa5cMkUWMrKpGQiIgAiIgAvMj2sjc9xwGjJK9LgvL9NBID+fDfgTv9F1LLwRk8Jsj6WZ0plnk/E85x4DoPkvLQHudI78x+S1MOmCTTgYXWxg7trfABNYwZ7e7sjrjsPcPxXqnqGmCMk8tCXFvu8KDbVtge6mldjclh6eYVGrr3VqSXKGvTbNtrrk+H/pOXAUd1t8lvudPHVUkgw6OQfIjwI8VXrV2E7OW6pM1LSFxJ2bOWuAHhs0EjyJK2GYjh/1XTRmWQ5bLp+qy/LI3p6Ovsk5IKeLXIWt1uOScDJKiWU1JPVGRrGPIyHNcMggjBBHUEZC23Wa1uLY62qNPO4bOOW6vQ8LhtDaeOplFG98oH4pCcjPqo55yicYrbhlfqvZZZZrj9pFXUMhJyaeVpkwOjQ7UDgcbq1dxQW+z/ddupmNpzku1tHvEjBJA24AHlgJWVWjIBULUVxJ5U/LJlcdHWnuNMzWwnSAAGt6LusjAHg9FESyiSRsOrMjt3AdAp62MwACtPR0JR8kuzD9S1Tc/DB8LskXO7irjmaTl3uO/qFMNmEFdBMAQHnQ4gdD4/HCha0aYA4ch7T9Qu6rDn0LcHDsc+CblFNIz65OOS2hZXPQyd9SQyHlzAT64XQkDWTygsLKwg6ZREQBgqI7TOLaGMj/Wbn6qXKhu1AebezQcYlbk/NTr/dFV/wDHI4mgPpyCfiu4Z0jHgo6n92Asc4vyOV2UkmunZ/KNJ9QmZCEDXUs1Ah3gqd2hhHdvJVvrZNsKl9qqnuaGZ55aCVKJGSz0UOt7VVdvqTGAahjNnEuwR9N1JWf2iUQe1kpex2fwvbv6eCpk7S7U5xySck+KhKqPMwDNnHOPJZ1lUJtvBtVX21xUW8n3Kq7R2mrjH2pjgW/qJauR/aSkYzTS/hHgoT2qwPr7JY7jSQMhtFQ1u7RgyTlmrV6Y1AejlD9gaad1mvkkrS63UkTpQ4/le1pJA8iAPoqvbL7GHrJfRL1vbahYT3lWHHjTGNR+ihz2zNTUCGkhMYd/mynJz5N6fNU+moy4lz9z+63Ph7otcwYLdwrYVQi8lNuosnFrJ9HsjnmQOe4lxOS4ncq5UMpAGlUGw1YdEx4PQK4UM+QCN1stLbweZllWPJN1kh7hreS57APmD+ykpmE0ekOOrHPKr88pdLTRtwXh+rGegBG/xKlnPd9n0ufq26DAVbXCLcrLRbLOc2ymyMHuwOMLtUfYmltppQ7nQCpBZ0u2bMP1QREXCQREQAUd2ghMtpqNP4mAPHwOf2UivEhaWEOxg7Fdi8PJGS3RaKzbHa4t+COi8tkFJM9pw1km/oVIwUUNHDopoZpMdXFcNbD35/j0Mv8AxJCZ8kWxJUTSOSrn1tyCqB24qC23yAn8bgNl9CdTwgYdT1DR6/8ASoXtLo4I7Yx9M2fW2VpfrxjTuPDxwuysjteAjRPcsnziQyPHutUfU072kSOwNJzupWKRo5Vs9m9NT1d9qZ5Qxz6OkdPDrGQ2TU1odjg41E7+SU6RoYy8C83t83srsFhige+qL3mZndEviZG/DduWkl7PUbdV5sF/oqD2d9pLFIwR1YcGxHBzIJTuD4EEO58l9Ev1FUfZHusRiZcHSRh88m73MDxnLjknYLnoay2i4vo6aCM01WXMqWaQGykjGT4lUq9PgZele1vJ8OjjcG581iYbYwF03IsprrX00RzFBVSxRk/pa8gfQLjlkB8FcKktYKgxsY0nGkq50txjhh1veBgZWewfYu23OwU9wuIrhUTOeQyJwa3QHENPB5AyrYzsRZPdzSXCTTuA6c/sE7C5KKTM63SylJtEVZXGpl+0y7a/yno0cD/3irG5wk7uKPdzyGNHmdlsZZKOljPc2qc/7pX/AN1qt9zoKavZJJSysMe2ztWk+Y5XZXJ9EYaWafJd4WCKJkbdg1oaPgti0UtTDVQtmp5GvY7gtOVvSJpIIiIOhERAGuR+AduFra3UNb9x0CIunD0JCNgAsF2eQiKQHl+46Ksdq7N9426WN8xaHjQcNB2PqERAHy6f2dOa4iK5Hy1R5Wyydjrxa7q2ehuNI7Ux0UkckbtMjHDdpwfqOCAiKDOlrgbdRTfZq6aIv4jljeS4j+Y4G/mPkuIWS5MkE1HUU8T2A90XanAOIxqI2zjJ2/qiKlQipcDsrZOvDZTv/nVaaiQTXSJztZ1OER949TypOl9lTZADNc3EdQ1mERXoSPrvZmiNvtkMLZnPaxukDAAGNtlMd4eERdOGHSE+ig71YYLoe9Ye4qwPdmaOfJw6hEXUcZVbNd6m21cwbjVC8snYD7j8HfHh6r6RRVDaqmjnaCA9ocAfNERI5E3oiKBM/9k=" alt="nisa">
  <h1>Nama : Nisa Aulia</h1>
<h1>NIM : 20210803010</h1>
  @endsection