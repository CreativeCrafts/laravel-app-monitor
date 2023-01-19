<h1>Disk File Log Metrics</h1>
<table>
  <thead>
    <tr>
      <th>Disk Name</th>
      <th>File Count</th>
      <th>Logged at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($diskFileLogEntries as $diskFileLogEntry)
      <tr>
        <td>{{ $diskFileLogEntry->disk_name }}</td>
        <td>{{ $diskFileLogEntry->file_count }}</td>
        <td>{{ $diskFileLogEntry->created_at->format('Y-m-d H:i:s') }}</td>
      </tr>
    @endforeach
  </tbody>
</table>