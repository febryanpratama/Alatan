<head>
    <meta charset="UTF-8">
    <title>{{ (isset($post->title) && !isset($not_change)) ? $post->title : 'Alatan Indonesia - Consultant, Research, Capacity Building and Training' }}</title>
    <meta name="description" content="Consulte is a free Bootstrap HTML Template for Investment Company" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL.html" />

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ (isset($post->title) && !isset($not_change)) ? $post->title : 'Alatan Indonesia - Consultant, Research, Capacity Building and Training' }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Alatan Indonesia" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    @php
        if(isset($post->content)){
            $description = str_replace("&amp;nbsp;", "", $post->content);
            $description = strip_tags($description);
            $description = str_replace(PHP_EOL, "", $description);
        }
        if(isset($post->keywords)){
            $keywords = str_replace(",", ", ", $post->keywords);
        }
    @endphp
    <meta property="og:description" content="{{ (isset($post->content) && !isset($not_change)) ? $description : 'Alatan Asasta Indonesia has a professional team, integrity and has a broad vision and always prioritizes service excellence as a motto in providing its services. Client satisfaction is the main goal of every service provided by PT Alatan Asasta Indonesia. Providing the best service is the main principle carried out by experts when working and supporting clients in achieving the expected goals.' }}" />

    <meta content="{{ (isset($post->content) && !isset($not_change)) ? $description : 'Alatan Asasta Indonesia has a professional team, integrity and has a broad vision and always prioritizes service excellence as a motto in providing its services. Client satisfaction is the main goal of every service provided by PT Alatan Asasta Indonesia. Providing the best service is the main principle carried out by experts when working and supporting clients in achieving the expected goals.' }}" name="description" />

    <meta content="{{ (isset($post->keywords) && !isset($not_change)) ? $keywords : 'Alatan, Asasta, Indonesia, Alatan Indonesia, Procurement, Pengadaan, Pengadaan Barang dan Jasa, ICITAP, Slog, Polri, Slog Polri, Pokja, PPK' }}" name="keywords" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="https://alatanindonesia.co.id/backup/wp-content/uploads/2021/04/ICO.png" type="image/x-icon">
    <link rel="icon" href="https://alatanindonesia.co.id/backup/wp-content/uploads/2021/04/ICO.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="https://alatanindonesia.co.id/backup/wp-content/uploads/2021/04/ICO.png" />
	<link rel="icon" href="https://aws.alatanindonesia.co.id/assets/images/favicon.png" type="image/x-icon">



    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "{{ (isset($post->title)) ? $post->title : 'Alatan Indonesia - Consultant, Research, Capacity Building and Training' }}",
            "url": "{{  url('') }}"
        }
    </script>

</head>