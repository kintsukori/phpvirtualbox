<?php
/*
 * German language file
 *
 * $Id$
 *
 */

class language {

public static $trans = array(

// General actions
'File' => 'Datei',
'Edit' => 'Bearbeiten',
'Save' => 'Speichern',
'OK' => 'OK',
'Cancel' => 'Abbrechen',
'Create' => 'Neu',
'Select' => 'Auswählen',
'Up' => 'Nach Oben',
'Down' => 'Nach Unten',
'Yes' => 'Ja',
'No' => 'Nein',
'Close' => 'Schließen',
'Any' => 'Alle',
'New' => 'Neu',
'Add' => 'Hinzufügen...',
'Delete' => 'Löschen',
'Keep' => 'Behalten',
'Settings' => 'Einstellungen',
'Preferences' => 'Eigenschaften',
'Refresh' => 'Neu Laden',
'Start' => 'Start',
'Power Off' => 'Power Off',
'Details' => 'Einzelheiten',
'Console' => 'Konsole',
'Description' => 'Beschreibung',
'Configuration' => 'Konfiguration',
'Operating System' => 'Betriebssystem',
'Machine' => 'Maschine',
'Enabled' => 'Aktiviert',
'Disabled' => 'Deaktiviert',
'Hosting' => 'Hosting',
'Basic' => 'Grundlagen',
'Advanced' => 'Erweitert',
'None' => 'Keine',
'Help' => 'Hilfe',
'About' => 'Über',
'Version' => 'Version',
'VirtualBox User Manual' => 'VirtualBox Benutzerhandbuch',
'Operation Canceled' => 'Aktion abgebrochen',
'Next' => 'Vor',
'Back' => 'zurück',
'Finish' => 'Beenden',
'Select File' => 'Datei auswählen',
'Select Folder' => 'Ordner auswählen',
'Server List' => 'Server-Liste',
'Interface Language' => 'Sprache der Benutzeroberfläche',
'Language' => 'Sprache',

// Users and Login
'Username' => 'Benutzername',
'Password' => 'Passwort',
'Log in' => 'einloggen',
'Log out' => 'ausloggen',
'Change Password' => 'Passwort ändern',
'Old Password' => 'Aktuelles Passwort',
'New Password' => 'Neues Passwort',
'The passwords you have entered do not match.' => 'Die Passwörter die Sie eingegeben haben stimmen nicht überein.',
'Password changed.' => 'Kennwort geändert.',
'The password you have entered is invalid.' => 'Das von Ihnen eingegebene Kennwort ist ungültig.',
'Retype' => 'Retype', // Retype password
'Invalid username or password.' => 'Ungültiger Benutzername oder Kennwort.',
'Users' => 'Benutzer',
'Add User' => 'Hinzufügen eines Benutzers',
'A user with that username already exists.' => 'Ein Benutzer mit diesem Benutzernamen existiert bereits.',
'Remove User' => 'Entfernen Sie diesen Benutzer',
'Are you sure you want to remove the user <b>%s</b>? This action cannot be undone.' => 'Sind Sie sicher, dass Sie den Benutzer <b>%s</b> entfernen möchten? Diese Aktion kann nicht rückgängig gemacht werden.',
'Edit User' => 'Bearbeiten dieses Benutzers',
'Admin User' => 'Administrativer Benutzer',
'Can administer users' => 'Kann Benutzer verwalten',
'Not logged in.' => 'Nicht eingeloggt.',

// Power button
'Stop' => 'Stoppen',
'Pause' => 'Anhalten',
'Reset' => 'Neustarten',
'Save State' => 'Zustand speichern',
'ACPI Power Button' => 'ACPI Ein/Ausschalten',
'ACPI Sleep Button' => 'ACPI Ruhezustand',
'ACPI event not handled' => 'Die virtuelle Maschine versteht dieses ACPI Ereignis nicht.',

// Settings button while VM is running
'CD/DVD Devices' => 'CD/DVD-Laufwerke',
'Floppy Devices' => 'Diskettenlaufwerke',
'USB Devices' => 'USB-Geräte',
'Network Adapters...' => 'Netzwerkadapter...',
'Shared Folders...' => 'Gemeinsame Ordner...',

'Approx X remaining' => 'Etwa %s verbleiben', /* %s will be replaced with a time. E.g. Approx 2 minutes, 4 seconds remaining */
'X ago' => 'vor %s', /* %s will be replaced with a time. E.g. 20 hours ago */
'minutes' => 'Minuten',
'seconds' => 'Sekunden',
'hours' => 'Stunden',
'days' => 'Tage',

/* Preview box */
'Preview' => 'Vorschau',
'Update Disabled' => 'Update deaktiviert',
'Every X seconds' => 'alle %s Sekunde(n)', /* %s will be replaced with numeric values */
'Open in new window' => 'In neuem Fenster öffnen', /* View VM screenshot in new window*/

/* Snapshots */
'Snapshots' => 'Momentaufnahme',
'Snapshot X' => 'Sicherungspunkt %s', /* %s will be replaced with snapshot number to generate a snapshot name */
'Snapshot Folder' => 'Ordner für Momentaufnahmen',
'Current State' => 'Aktueller Zustand',
'Restore' => 'Wiederherstellen',
'Restore Snapshot' => 'Momentaufnahme wiederherstellen',
'Take Snapshot' => 'Momentaufnahme machen',
'Delete Snapshot' => 'Momentaufnahme löschen',
'Snapshot Details' => 'Einzelheiten der Momentaufnahme',
'Snapshot Name' => 'Name der Momentaufnahme',
'Snapshot Description' => 'Beschreibung der Momentaufnahme',
'Restore Snapshot Message' => 'Sind Sie sicher, dass Sie die Momentaufnahme %s wiederherstellen möchten? Dabei wird der aktuelle Zustand dieser Maschine gelöscht und kann nicht wiederhergestellt werden.',
'Delete Snapshot Message1' => 'Wenn Sie diese Momentaufnahme löschen, wird der damalige Status ebenso gelöscht. Daten, die zum Zeitpunkt der Momentaufnahme über mehrere Dateien verteilt wurden, werden in einer Datei zusammen gefasst. Dies kann längere Zeit dauern. Die Momentaufnahme kann nicht wiederhergestellt werden.',
'Delete Snapshot Message2' => 'Sind Sie sicher, dass Sie die Momentaufnahme %s löschen möchten?',
'Taken' => 'Aufgenommen',
'changed' => 'geändert',

/* Discard State */
'Discard' => 'Verwerfen',
'Discard Message1' => 'Sind Sie sicher, dass Sie den gespeicherten Zustand der virtuellen Maschine %s verwerfen möchten?', // %s willl be replaced with VM name
'Discard Message2' => 'Diese Aktion entspricht dem Neustart oder Ausschalten der Maschine ohne das Gastsystem ordnungsgemäß herunterzufahren.',

/* Delete or Unregister Inaccessible Machine */
'VM Inaccessible' => 'Auf die ausgewählte virtuelle Maschine kann nicht zugegriffen werden. Bitte beachten Sie die nachstehende Fehlermeldung. Um die Möglichkeit des Zugriffs nochmals zu Überprüfen, drücken Sie den Konpf Neu Laden.',
'Delete VM Message1' => 'Sie sind im Begriff, die virtuelle Maschine %s aus der Liste der virtuellen Maschine zu entfernen.',
'Delete VM Message2' => 'Möchten Sie die entsprechenden Dateien von der Festplatte ebenfalls löschen? Falls ja, werden die virtuellen Festplatten ebenfalls unwiderruflich gelöscht, falls diese nicht noch an eine andere VM gebunden sind.',
'Delete all files' => 'Alle Dateien löschen',
'Remove only' => 'Nur löschen',
'Unregister VM Message1' => 'Sind Sie sicher, dass Sie die nicht verfügbare virtuelle Maschine %s deregistrieren möchten?',
'Unregister VM Message2' => 'Sie können sie über diese grafische Oberfläche nicht mehr registrieren.',
'Unregister' => 'Unregister',

/* Error fetching machines */
'Error vmlist 1' => 'Beim Ermitteln der Liste virtueller Maschimen ist ein Fehler aufgetreten. Stellen Sie sicher, dass vboxwebsrv gestartet ist und die Einstellugen in der Datei config.php stimmen.',
'Error vmlist 2' => 'Die Liste der virtuellen Maschinen können Sie durch das erneute Laden dieser Seite aktualisieren.',

/* Properties */
'host' => 'VirtualBox Host',
'Port' => 'Port',
'General' => 'Allgemein',
'Name' => 'Name',
'OS Type' => 'OS Typ',

/* Options in Preferences / Global Settings */
'Default Hard Disk Folder' => 'Standardordner für Festplatten',
'Default Machine Folder' => 'Standardordner für Maschinen',
'VRDE Authentication Library' => 'VRDE-Authentisierungsbibliothek',
'Add host-only network' => 'Host-only Netzwerk hinzufügen',
'Remove host-only network' => 'Host-only Netzwerk entfernen',
'Edit host-only network' => 'Host-only Netzwerk bearbeiten',
'Host-only Network Details' => 'Host-only Netzwerk - Einzelheiten',
'Host-only Networks' => 'Host-only Netzwerke',
'IPv4Mask' => 'Netzwerkmaske',
'IPv6Mask' => 'IPv6 Netzwerk Maskenlänge',
'Server Address' => 'Server Addresse',
'Server Mask' => 'Server Maske',
'Lower Address Bound' => 'von Addresse',
'Upper Address Bound' => 'bis Addresse',
'DHCP Server' => 'DHCP Server',
'DHCP enabled' => 'DHCP aktiviert',
'Manually configured' => 'Manuell konfiguriert',
'Delete Interface Message1' => 'Wenn Sie dieses Host-only Netzwerk entfernen, wird die Host-only Schnittstelle entfernt, zu der dieses Netzwerk gehört. Möchten Sie diese (Host-only Netzwerk) Schnittstelle %s entfernen?',
'Delete Interface Message2' => 'Anmerkung: Diese Schnittstelle wird möglicherweise von einem oder mehreren virtuellen Netzwerkadaptern genutzt, welche zu einer Ihrer virtuellen Maschinen gehören. Sobald diese Schnittstelle entfernt wird, werden diese Netzwerkadapter nicht mehr funktionieren bis Sie die Einstellungen der virtuellen Maschinen korrigiert haben. Entweder wählen Sie einen anderen Schnittstellen Namen oder einen anderen Typ von Netzwerkadapter.',

'System' => 'System',
'Base Memory' => 'Hauptspeicher',
'Memory' => 'Speicher',
'free' => 'verfügbar', // as in free/available memory
'Enable IO APIC' => 'IO APIC aktivieren',
'Enable EFI' => 'EFI aktivieren (Ausnahme, nur für spezielle Betriebssysteme)',
'Hardware clock in UTC time' => 'Systemzeit im Format UTC',
'Processors' => 'Processoren',
'Execution Cap' => 'CPU-Auslastungsgrenze', /*new-done*/
'%s%' => '%s%', /*new-done*/
'Boot Order' => 'Startreihenfolge',
'Removable Media' => 'Wechseldatenträger',
'Remember Runtime Changes' => 'Änderungen zur Laufzeit merken',
'Motherboard' => 'Hauptplatine',
'Chipset' => 'Chipsatz',
'Acceleration' => 'Beschleunigung',
'Extended Features' => 'Erweiterte Eigenschaften',
'CPUs' => 'CPUs',
'VCPU' => 'VT-x/AMD-V',
'Nested Paging' => 'Nested Paging',
'Hardware Virtualization' => 'Hardware Virtualisierung',
'Enable VCPU' => 'VT-x/AMD-V aktivieren',
'Enable Nested Paging' => 'Nested Paging aktivieren',
'Enable PAE/NX' => 'PAE/NX aktivieren',

'Display' => 'Bildschirm',
'Video' => 'Grafik',
'Video 2d' => '2D Beschleunigung',
'Video 3d' => '3D Beschleunigung',
'Video Memory' => 'Grafikspeicher',

'Remote Display' => 'Fernsteuerung',
'Remote Console' => 'Fernzugriff (RDP)',
'Ports' => 'Ports',
'Net Address' => 'Netzwerk Addresse',
'Enable Server' => 'Fernzugriff aktivieren',
'Server Port' => 'Port für Fernzugriff',
'Authentication Timeout' => 'Timeout für Anmeldung',
'Authentication Method' => 'Anmeldungsmethode',
'External' => 'Extern',
'Guest' => 'Gast',
'Allow Multiple Connections' => 'Gleichzeitige Verbindungen erlauben',

'Storage' => 'Speicherpaltz',
'Storage Tree' => 'Storage Tree',
'Attributes' => 'Attribute',
'Type' => 'Typ',
'Slot' => 'Slot',
'Size' => 'Größe',
'Virtual Size' => 'Virtuelle Größe',
'Actual Size' => 'Aktuelle Größe',
'Location' => 'Ort',
'Information' => 'Information',
'Use host I/O cache' => 'Host I/O cache nutzen',
'IDE Controller' => 'IDE Controller',
'Primary Master' => 'Primärer Master',
'Primary Slave' => 'Primärer Slave',
'Secondary Master' => 'Sekundärer Master',
'Secondary Slave' => 'Sekundärer Slave',
'Floppy Controller' => 'Floppy-Controller',
'Floppy Drive' => 'Diskettenlaufwerk',
'SCSI Controller' => 'SCSI-Controller',
'SCSI Port %s' => 'SCSI-Port %s',
'SATA Controller' => 'SATA-Controller',
'SATA Port %s' => 'SATA-Port %s',
'SAS Controller' => 'SAS-Controller',
'SAS Port %s' => 'SAS-Port %s',
'HardDisk' => 'Festplatte',
'Floppy' => 'Diskette',
'Floppy Device %s' => 'Diskettenlaufwerk %s',
'DVD' => 'CD/DVD',
'Type (Format)' => 'Typ (Format)',
'Add Attachment' => 'Anlage hinzufügen',
'Remove Attachment' => 'Anlage entfernen',
'Add Controller' => 'Controller hinzufügen',
'Remove Controller' => 'Controller entfernen',
'Add CD/DVD Device' => 'CD/DVD Gerät hinzufügen',
'Add Hard Disk' => 'Festplatte hinzufügen',
'Add Floppy Device' => 'Diskettenlaufwerk hinzufügen',
'DVD Drive' => 'CD/DVD-Laufwerk',
'Empty' => 'Leer',
'Passthrough' => 'Passthrough',
'Live CD/DVD' => 'Live CD/DVD', /*new-done*/
'Solid-state drive' => 'Solid-state drive',/*new*/
'Dynamically allocated storage' => 'Dynamically allocated storage', /*new*/
'Fixed size storage' => 'Fixed size storage',/*new*/  
'Unknown Device' => 'Unbekanntes Gerät',
'Host Drive' => 'Host Laufwerk',
'Add IDE Controller' => 'IDE Controller hinzufügen',
'Add Floppy Controller' => 'Disketten Controller hinzufügen',
'Add SCSI Controller' => 'SCSI Controller hinzufügen',
'Add SATA Controller' => 'SATA Controller hinzufgen',
'Add SAS Controller' => 'SAS Controller hinzufügen',
'LsiLogic' => 'LsiLogic',
'BusLogic' => 'BusLogic',
'IntelAhci' => 'AHCI',
'PIIX3' => 'PIIX3',
'PIIX4' => 'PIIX4',
'ICH6' => 'ICH6',
'I82078' => 'I82078',
'LsiLogicSas' => 'LsiLogic SAS',
'Differencing Disks' => 'Differencing Disks',
'No unused media message 1' => 'Für die neu hinzugefügten Anlagen ist kein freies Medium verfügbar.',
'No unused media message 2' => 'Um den Assistenten für virtuelle Medien zu starten, drücken Sie die Schaltfläche Anlagen. Um den Manager für virtuelle Medien zu starten, wählen Sie Auswählen.',
'storage attached indirectly' => 'Die Festplatte wird indirekt über ein neue andere Festplatte angeschlossen.',
'base disk indirectly attached' => 'Diese Festplatte ist indirekt über folgende andere Festplatte angeschlossen:',
'Attached to' => 'Verbunden mit',
'Not Attached' => 'Nicht verbunden',
'Set up the virtual hard disk' => 'Virtuelle Festplatte aufsetzen',
'Set up the virtual floppy drive' => 'Virtuelle Diskette aufsetzen',
'Set up the virtual CD/DVD drive' => 'Virtuelles CD/DVD-ROM-Laufwerk aufsetzen',
'Choose a virtual floppy disk file...' => 'Datei für virtuelle Diskette auswählen...',
'Choose a virtual CD/DVD disk file...' => 'Datei für virtuelles CD/DVD-ROM-Medium auswählen...',
'Choose a virtual hard disk file...' => 'Datei für virtuelle Festplatte auswählen...',
'Create a new hard disk...' => 'Neue Festplatte erzeugen...',
'Remove disk from virtual drive' => 'Medium entfernen',
'Image' => 'Datei', // CD/DVD or Floppy image

'Serial Ports' => 'Serielle Schnittstellen',
'Port X' => 'Port %s', // %s will be replaced with port number
'Enable Serial Port' => 'Serielle Schnittstelle aktivieren',
'Port Number' => 'Portnummer',
'IRQ' => 'IRQ',
'I/O Port' => 'I/O-Port',
'User-defined' => 'benutzerdefiniert',
'Port Mode' => 'Portmodus',
'Disconnected' => 'nicht verbunden',
'HostPipe' => 'Host-Pipe',
'HostDevice' => 'Host-Schnittstelle',
'RawFile' => 'Datei',
'Create Pipe' => 'Erzeuge Pipe',
'Port/File Path' => 'Port/Datei-Pfad',

'Parallel Ports' => 'Parallel-Ports',
'Enable Parallel Port' => 'Parallele Schnittstelle aktivieren',
'Port Path' => 'Portpfad',

'USB' => 'USB',
'USB Controller' => 'USB Controller',
'Enable USB Controller' => 'USB Controller aktivieren',
'Enable USB 2.0 Controller' => 'USB 2.0 Controller aktivieren',
'USB Device Filters' => 'USB Geräte Filter',
'Add Empty Filter' => 'Leeren Filter hinzufügen',
'Add Filter From Device' => 'Filter eines angeschlossen Geräts hinzufügen',
'Edit Filter' => 'Filter bearbeiten',
'Remove Filter' => 'Filter entfernen',
'Move Filter Up' => 'Filter vorrangig',
'Move Filter Down' => 'Filter nachrangig',
'Device Filters' => 'Gerätefilter',
'active' => 'aktiv',
'no devices available' => 'keine Geräte verfügbar',

'USB Filter' => 'USB Filter',
'New Filter' => 'Neuer Filter',
'Vendor ID' => 'Lieferanten ID',
'Product ID' => 'Produkt ID',
'Revision' => 'Revision',
'Manufacturer' => 'Hersteller',
'Serial No' => 'Seriennummer',
'Remote' => 'Fern',

'Shared Folders' => 'Gemeinsame Ordner',
'Shared Folder' => 'Gemeinsamer Ordner',
'Folders List' => 'Ordnerliste',
'Machine Folders' => 'Ordner der virtuellen Maschine',
'Transient Folders' => 'Transiente Ordner',
'Path' => 'Pfad',
'Access' => 'Zugriff',
// read only & read/write
'ro' => 'nur Lesen',
'rw' => 'Lesen und Schreiben',
'Auto-Mount' => 'automatisch einbinden', // 3.2.8
'Make Permanent' => 'Permanent erzeugen',
'Full Access' => 'Vollzugriff',
'Add Shared Folder' => 'Gemeinsamen Ordner hinzufügen',
'Edit Shared Folder' => 'Gemeinsamen Ordner bearbeiten',
'Remove Shared Folder' => 'Gemeinsamen Ordner entfernen',


'Audio' => 'Audio',
'Enable Audio' => 'Audio aktivieren',
'Host Audio Driver' => 'Host Audio Treiber',
'Audio Controller' => 'Audio Controller',

'WinMM' => 'Windows multimedia',
'Null Audio Driver' => 'Null Audio Treiber',
'OSS' => 'Open Sound System',
'ALSA' => 'Advanced Linux Sound Architecture',
'DirectSound' => 'Microsoft DirectSound',
'CoreAudio' => 'Rudimentäres Audio',
'MMPM' => 'Reserved for historical reasons.', /* In API. May never see it in the real world */
'Pulse' => 'Pulse Audio',
'SolAudio' => 'Solaris Audio',

'HDA' => 'Intel HD Audio', // 3.2.8
'AC97' => 'ICH AC97',
'SB16' => 'SoundBlaster 16',

'Network' => 'Netzwerk',
'Adapter' => 'Adapter',
'Network Adapter' => 'Netzwerkadapter',
'Enable Network Adapter' => 'Netzwerkadapter aktivieren',
'Adapter Type' => 'Adaptertyp',
'Bridged Adapter' => 'Netzwerkbrücke',
'Internal Network' => 'Internes Netzwerk',
'Host-only Adapter' => 'Host-only Adapter',
'Generic Driver' => 'Generic Driver', /*new*/
'VDE Adapter' => 'VDE Adapter',
'Promiscuous Mode' => 'Promiscuous Mode',/*new*/
'Deny' => 'Deny', /*new*/
'Allow VMs' => 'Allow VMs', /*new*/
'Allow All' => 'Allow All', /*new*/
'Not attached' => 'nicht angeschlossen',
'Bridged adapter, %s' => 'Netzwerkbrücke, %s', // %s will be replaced by adapter name
'Host-only adapter, \'%s\'' => 'Host-only Adapter, \'%s\'', // %s will be replaced by adapter name
'Internal network, \'%s\'' => 'Internes Netzwerk, \'%s\'', // %s will be replaced by network name
'VDE network, \'%s\'' => 'VDE-Netzwerk, \'%s\'', // %s will be replaced by network name
'Generic Driver, \'%s\'' => 'Generic Driver, \'%s\'', // %s will be replaced with driver name /*new*/
'NAT' => 'NAT',
'network' => 'netzwerk',
'Ethernet' => 'Ethernet',
'PPP' => 'PPP',
'SLIP' => 'SLIP',
'IPv4Addr' => 'IP Addresse',
'IPv6Addr' => 'IP(v6) Addresse',
'Mac Address' => 'MAC Addresse',
'Cable connected' => 'durch Kabel verbunden',
'netMediumType' => 'Typ',
'Guest Network Adapters' => 'Netzwerkadapter des Gastes',
'Port Forwarding' => 'Port-Weiterleitung',
'Port Forwarding Rules' => 'Regel für Port-Weiterleitung',
'Protocol' => 'Protokoll',
'Host IP' => 'Host-IP',
'Host Port' => 'Host-Port',
'Guest IP' => 'Gast-IP',
'Guest Port' => 'Gast-Port',
'TCP' => 'TCP',
'UDP' => 'UDP',
'Rule' => 'Regel',
'Insert new rule' => 'Neue Regel hinzufügen',
'Delete selected rule' => 'Ausgewählte Regel entfernen',
'Invalid IP Address' => 'Ungültige IP-Adresse',
'The current port forwarding rules are not valid' => 'Die Regeln für die Port-Weiterleitung enthalten momentan Fehler. Keiner der Host- oder Gast-Ports darf Null sein.',


'Am79C970A' => 'AMD PCNet-PCI II Netzwerkadapter',
'Am79C973' => 'AMD PCNet-FAST III Netzwerkadapter',
'I82540EM' => 'Intel PRO/1000 MT Desktop Netzwerkadapter',
'I82543GC' => 'Intel PRO/1000 T Server Netzwerkadapter',
'I82545EM' => 'Intel PRO/1000 MT Server Netzwerkadapter',
'Virtio' => 'Virtio Netzwerkgerät',


// Machine states
'PoweredOff' => 'Ausgeschaltet',
'Saved' => 'Gespeichert',
'Teleported' => 'Übertragen',
'Aborted' => 'Abgebrochen',
'Running' => 'Läuft',
'Paused' => 'Angehalten',
'Stuck' => 'Klemmt',
'Teleporting' => 'Übertragen',
'LiveSnapshotting' => 'Live Snapshotting',
'Starting' => 'Starten',
'Stopping' => 'Stoppen',
'Saving' => 'Speichern',
'Restoring' => 'Wiederherstellen',
'TeleportingPausedVM' => 'Übertrage angehaltene VM',
'TeleportingIn' => 'Übertrage',
'RestoringSnapshot' => 'Momentaufnahme wiederherstellen',
'DeletingSnapshot' => 'Momentaufnahme löschen',
'SettingUp' => 'Vorbereitung',

// list separator
'LIST_SEP' => ', ',

// Sizes
'B' => 'B',
'KB' => 'KB',
'MB' => 'MB',
'GB' => 'GB',
'TB' => 'TB',

// Virtual Media Manager
'Open Virtual Media Manager' => 'Manager für virtuelle Medien öffnen',
'Virtual Media Manager' => 'Manager für virtuelle Medien',
'Are you sure remove medium' => 'Sind Sie sicher, dass Sie das Medium %s aus der Liste der bekannten Medien löschen möchten?',
'Medium remove note' => 'Beachten Sie, dass das Medium nicht vom Datenträger gelöscht wird. Sie können es zu einem späteren Zeitpunkt wieder zur Liste hinzufügen.',
'Are you sure release medium' => 'Sind Sie sicher, dass Sie das Medium %s freigeben möchten?',
'This will detach from' => 'Dies wird es von diesen virtuellen Machinen: %s trennen.',
'Please select a medium.' => 'Bitte wählen Sie ein Medium.',
'VMM Remove Media Message1' => 'Sind Sie sicher, dass Sie dieses Medium %s vom Datenträger löschen möchten?',
'VMM Remove Media Message2' => 'Wenn Sie Löschen wählen, wird das Medium endgültig gelöscht <b>Diese Aktion kann nicht rückgängig gemacht werden.</b>',
'VMM Remove Media Message3' => 'Wenn Sie Behalten wählen, wird das Medium nur von der Liste der bekannten Festplatten entfernt und bleibt auf dem Datenträger erhalten. Sie können es zu einem späteren Zeitpunkt wieder zur Liste hinzufügen.',
'Normal' => 'Normal',
'Writethrough' => 'Direktzugriff',
'Immutable' => 'Nicht veränderbar',
'Actions' => 'Aktionen',
'Remove' => 'Entfernen',
'Release' => 'Freigeben',
'Hard Disks' => 'Festplatten',
'CD/DVD Images' => 'CD/DVD-Abbilder',
'Floppy Images' => 'Diskettenabbilder',
'Storage Details' => 'Storage Details',/*new*/
'Shareable' => 'Shareable',/*new*/
'Multi-attach' => 'Multi-attach',/*new*/
'Copy' => 'Copy',/*new*/
'Format' => 'Format',/*new*/
'Differencing' => 'Differencing',/*new*/

/* Copy HD Wizard */
'Copy Virtual Disk' => 'Copy Virtual Disk',/*new*/
'Welcome to the virtual disk copying wizard' => 'Welcome to the virtual disk copying wizard',/*new*/
'copyHD Step1 Message1' => 'This wizard will help you to copy a virtual disk.',/*new*/
'copyHD Step1 Message2' => 'Use the <b>Next</b> button to go to the next page of the wizard and the <b>Back</b> button to return to the previous page. You can also press <b>Cancel</b> if you want to cancel the execution of this wizard.',/*new*/
'copyHD Step1 Message3' => 'Please select the virtual disk which you would like to copy if it is not already selected. You can either choose one from the list or use the folder icon beside the list to select a virtual disk file',/*new*/
'Virtual disk to copy' => 'Virtual disk to copy',/*new*/
'Virtual disk file type' => 'Virtual disk file type',/*new*/
'copyHD Step2 Message1' => 'Please choose the type of file that you would like to use for the new virtual disk. If you do not need to use it with other virtualization software you can leave this setting unchanged.',/*new*/
'Virtual disk file location' => 'Virtual disk file location',/*new*/
'copyHD Step4 Message1' => 'Press the <b>Select</b> button to select the location of a file to store the virtual disk data or type a file name in the entry field.',/*new*/
'copyHD Step5 Message1' => 'You are going to create a copied virtual disk with the following parameters:',/*new*/
'%s_copy' => '%s_copy',/*new*/

/* Clone VM wizard */
'Clone' => 'Clone', /* new */
'%s Clone' => '%s Clone', // %s will be replaced with VM name /*new*/
'Clone a virtual machine' => 'Clone a virtual machine', /*new*/
'cloneVM Welcome' => 'Welcome to the virtual machine clone wizard', /*new*/
'cloneVM Step1 Message1' => 'This wizard will help you to create a clone of your virtual machine', /*new*/
'cloneVM Step1 Message2' => 'Use the <b>Next</b> button to go to the next page of the wizard and the <b>Back</b> button to return to the previous page. You can also press <b>Cancel</b> if you want to cancel the execution of this wizard.', /*new*/
'cloneVM Step1 Message3' => 'Please choose a name for the new virtual machine:',/*new*/
'Cloning Configuration' => 'Cloning Configuration',/*new*/
'cloneVM Step2 Message1' => 'Please choose which parts of the virtual machine should be cloned.',/*new*/
'cloneVM Step2 Message2' => 'If you select <b>Current machine state</b>, only the current state of the virtual machine is cloned. If you select <b>All states</b>, the current machine state and all snapshots are cloned.',/*new*/
'cloneVM Step2 Message3' => 'If you select <b>Current machine state</b>, only the current state of the virtual machine is cloned. If you select <b>Current machine and all child states</b> the current state of the virtual machine and any states of child snapshots are cloned. If you select <b>All states</b>, the current machine state and all snapshots are cloned.',/*new*/
'Current machine state' => 'Current machine state',/*new*/
'Current machine and all child states' => 'Current machine and all child states',/*new*/
'All states' => 'All states',/*new*/

/* New hard disk wizard */
'Create New Virtual Disk' => 'Neue virtuelle Festplatte anlegen',
'newDisk Welcome' => 'Welcome virtual disk creation wizard', /*new*/
'newDisk Step1 Message1' => 'This wizard will help you to create a new virtual hard disk for your virtual Machine.',/*new*/
'newDisk Step1 Message2' => 'Use the <b>Next</b> button to go to the next page of the wizard and the <b>Back</b> button to return to the previous page. You can also press <b>Cancel</b> if you want to cancel the execution of this wizard.',/*new*/
'newDisk Step1 Message3' => 'Please choose the type of file that you would like to use for the new virtual disk. If you do not need to use it with other virtualization software you can leave this setting unchanged.',/*new*/
'File Type' => 'File Type',/*new*/
'VDI (VirtualBox Disk Image)' => 'VDI (VirtualBox Disk Image)',/*new*/
'VMDK (Virtual Machine Disk)' => 'VMDK (Virtual Machine Disk)',/*new*/
'VHD (Virtual Hard Disk)' => 'VHD (Virtual Hard Disk)',/*new*/ 
'Virtual disk storage details' => 'Virtual disk storage details',/*new*/
'newDisk Step2 Message1' => 'Please choose whether the new virtual disk file should expand as it is used or be created fully expanded.', /*new*/
'newDisk Step2 dynamic' => 'A <b>dynamically expanding</b> virtual disk file will only use space on your physical hard disk as it fills up, although it will not shrink again automatically when space on it is freed.', /*new*/
'newDisk Step2 fixed' => 'A <b>fixed size</b> virtual disk file may take longer to create on some systems but is often faster to use.',/*new*/
'Storage details' => 'Storage details',/*new*/
'Dynamically expanding' => 'Dynamically expanding',/*new*/
'Fixed size' => 'Fixed size',/*new*/
'Virtual disk file location and size' => 'Virtual disk file location and size',/*new*/
'newDisk Step3 Message1' => 'Press the <b>Select</b> button to select the location of a file to store the virtual disk data or type a file name in the entry field.',/*new*/
'newDisk Step3 Message2' => 'Select the size of the virtual disk in megabytes. This size will be reported to the Guest OS as the maximum size of this virtual disk.',/*new*/
'Summary' => 'Zusammenfassung',
'newDisk Step4 Message1' => 'Sie legen eine Festplatte mit folgenden Eigenschaften an:',
'newDisk Step4 Message2' => 'Drücken Sie die Schaltfläche Beenden, wenn diese Angaben korrekt sind. Damit wird die neue Festplatte angelegt.',

/* New virtual machine wizard */
'Create New Virtual Machine' => 'Neue virtuelle Maschine anlegen',
'New Virtual Machine Wizard' => 'Assistent für virtuelle Maschinen',
'newVM Welcome' => 'Willkommen beim Assistenten für neue virtuelle Maschinen!',
'newVM Step1 Message1' => 'Dieser Assistent begleitet Sie auf den notwendigen Schritten, um eine neue virtuelle Maschine mit Virtualbox anzulegen.',
'newVM Step1 Message2' => 'Use the <b>Next</b> button to go to the next page of the wizard and the <b>Back</b> button to return to the previous page. You can also press <b>Cancel</b> if you want to cancel the execution of this wizard.',/*new*/
'VM Name and OS Type' => 'VM Name und Betriebssystem',
'newVM Step2 Message1' => 'Geben Sie der neuen virtuellen Maschine einen Namen und wählen Sie das Betriebssystem, das Sie in diese Maschine isntallieren möchten.',
'newVM Step2 Message2' => 'Nutzen Sie den Namen, um einen Hinweis auf die Verwendung und/oder Konfiguration der virtuellen Maschine zu haben. VirtualBox und Komponenten verwenden diesen Namen zur Identifizierung .',
'newVM Step3 Message1' => 'Geben Sie die Größe des Hauptspeichers (RAM) in Megabytes an, den diese Maschine erhalten soll.',
'newVM Step3 Message2' => 'Vorgeschlagene Größe %s MB.', /* %s will be replaced with the recommended memory size at run time */
'Base Memory Size' => 'Base Memory Size',/*new*/
'Virtual Hard Disk' => 'Virtuelle Festplatte',
'Boot Hard Disk' => 'Startplatte',
'Create new hard disk' => 'Neue Festplatte anlegen',
'Use existing hard disk' => 'Vorhandene Festplatte nutzen',
'newVM Step4 Message1' => 'Select a virtual hard disk to be used as the boot hard disk of the virtual machine. You can either create a new hard disk or select an existing one from the drop-down list or by pressing corresponding button (to invoke file-open window).',/*new*/
'newVM Step4 Message2' => 'Sie können diesen Schritt auch überspringen und komplexere Einstellungen später über den Manager für virtuelle Maschinen vornehmen.',
'newVM Step4 Message3' => 'Vorgeschlagene Größe %s.', /* %s will be replaced with the recommended memory size at run time */
'newVM Step5 Message1' => 'Sie legen eine neue virtuelle Maschine mit folgenden Eigenschaften an:',
'newVM Step5 Message2' => 'Drücken Sie die Schaltfläche Beenden, Wenn diese Angaben korrekt sind. Damit wird die virtuelle Maschine angelegt.',
'newVM Step5 Message3' => 'Sie können die Eigenschaften der virtuellen Maschine jederzeit über das Hauptmenü, Bearbeiten - Einstellungen ändern.',

/* VM Log files */
'Show Log' => 'Protokoll anzeigen',
'Logs' => 'Protokolle',
'No logs found.' => 'Für die ausgewählte virtuelle Maschine wurden keine Protokolle gefunden.',

/* Import / Export Appliances */
'Export Appliance' => 'Appliance exportieren',
'Appliance Export Wizard' => 'Assistent für den Export einer Appliance',
'Appliance Export Wizard Welcome' => 'Willkommen beim Assistenten für den Export von Appliances!',
'appExport Step1 Message1' => 'Dieser Assistent begleitet Sie auf den notwendigen Schritten, die zum Export einer Appliance notwendig sind.',
'appExport Step1 Message2' => 'Nutzen Sie die Schaltflächen Vor und Zurück, um zur nächsten oder vorigen Seite zu navigieren. Mit der Schaltfläche Abbrechen können Sie den Assistenten jederzeit verlassen.',
'appExport Step1 Message3' => 'Bitte wählen Sie die virtuelle(n) Maschine(n), die zu einer Appliance hinzugefügt werden sollen. Achten Sie darauf, dass diese Maschinen vor dem Export ausgeschaltet sind.',
'Appliance Export Settings' => 'Appliance Export Einstellungen',
'appExport Step2 Message1' => 'Bitte wählen Sie einen Dateinamen für den Export als OVF/OVA. Bei Angabe der ova-Dateiendung werden alle Dateien in ein OVA-(Open Virtualization Format)-Archiv geschrieben. Bei Angabe der Endung ovf werden einzelne Dateien geschrieben. Andere Dateiendungen sind nicht erlaubt.',
'appExport Step3 Message1' => 'Hier können Sie weitere Einstellungen der ausgewählten virtuellen Maschinen ändern. Sie können die meisten der gezeigten Eigenschaften durch Doppelklick auf den Eintrag ändern.',
'Import Appliance' => 'Appliance importieren',
'Appliance Import Wizard' => 'Assistent für den Import einer Appliance',
'Appliance Import Wizard Welcome' => 'Willkommen beim Assistenten für den Import virtueller Maschinen!',
'appImport Step1 Message1' => 'Dieser Assistent begleitet Sie auf den notwendigen Schritten, die zum Import einer Appliance notwendig sind.',
'appImport Step1 Message2' => 'Nutzen Sie die Schaltflächen Vor und Zurück, um zur nächsten oder vorigen Seite zu navigieren. Mit der Schaltfläche Abbrechen können Sie den Assistenten jederzeit verlassen.',
'appImport Step1 Message3' => 'VirtualBox kann derzeit Appliances importieren, die im Open Virtualization Format (OVF) gespeichert sind. Um Fortzufahren, wählen Sie eine Datei zum Import aus:',
'Appliance Import Settings' => 'Appliance Import Einstellungen',
'appImport Step2 Message1' => 'Die Appliance enthält diese Maschinen und ihre vorgeschlagenen Einstellungen. Sie können die meisten Einstellungen durch Doppelklick oder an/abwählen nachstehender Auswahlboxen ändern.',
'appImport Step3 Message1' => 'Bitte geben Sie einen Dateinamen für den Import der OVF an.',
'Write legacy OVF' => 'in altem  OVF 0.9 speichern',
'Write Manifest file' => 'Schreibe Manifest-Datei',
'Virtual System X' => 'Virtuelles System %s', // %s will be replaced with the virtual system number
'Product' => 'Produkt',
'Product-URL' => 'Produkt-URL',
'Vendor' => 'Lieferant',
'Vendor-URL' => 'Lieferanten-URL',
'License' => 'Lizenz',
'Hard Disk Controller' => 'Festplatten Controller',
'Virtual Disk Image' => 'Virtuelle Festplatte',
'Warnings' => 'Warnungen',

/* Operation in progress onUnLoad warning message */
'Operation in progress' => 'Warnung: Interne Aktion läuft. Wenn Sie dieses Fenster schließen oder diese Seite verlassen, kann das zu unerwünschten oder unbeabsichtigten Effekten führen. Bitte warten Sie bis die Aktion abgeschlossen ist.',
'Loading ...' => 'Lädt ...', // "loading ..." screen

/* Versions */
'Unsupported version' => 'Sie verwenden eine noch nicht getestete Version von VirtualBox (%s) mit phpVirtualbox. Unbekannte und unvorhersehbare Ergebnisse können auftreten.',
'Do not show message again' => 'Diese Meldung nicht mehr anzeigen.',

/* Fatal connection error */
'Fatal error' => 'Bei der Kommunikation mit dem vboxwebsrv ist ein Fehler aufgetreten. Bevor dieser Fehler nicht behoben wird und diese Seite neu geladen wurde, werden von phpVirtualBox keine Anfragen mehr gesendet. Einzelheiten entnehmen Sie der folgenden Dialogbox.',

/* Guest properties error */
'Unable to retrieve guest properties' => 'Die Eigenschaften des Gastes können nicht ermittelt werden. Stellen Sie sicher, das die Maschine läuft und die Gasterweiterungen von VirtualBox installiert sind.',

/*Remote Console */
'User name' => 'Benutzername',
'Password' => 'Passwort',
'Connecting to' => 'Verbinden mit',
'Connected to' => 'Verbunden mit',
'Requested desktop size' => 'Angeforderte Bildschirmgöße',
'Connect' => 'Verbinden',
'Detach' => 'Trennen',
'Disconnect' => 'Trennen',
"Ctrl-Alt-Del" => "Send Ctrl-Alt-Del",
'Disconnect reason' => 'Grund für die Trennung',
"Redirection by" => "Redirection by",
'Virtual machine is not running or RDP configured.' => 'Die virtuelle Maschine läuft nicht oder sie ist nicht für Zugriffe über RDP konfiguriert.',

/* Guest Additions */
'Install Guest Additions' => 'Gasterweiterungen installieren',
'Guest Additions Mounted' => 'Das CD-Abbild mit den Gasterweiterungen wurde erfolgreich an ein CD/DVD-Laufwerk der virtuellen Maschine gebunden. Um den Installationsvorgang abzuschließen müssen Sie sich in die virtuelle Maschine einloggen und die Installation der Virtualbox Gasterweiterungen vornehmen.',
'Guest Additions No CDROM' => 'Das CD-Abbild mit den Gast-Erweiterungen konnte nicht an die Maschine gebunden werden, da diese Maschine kein CD/DVD-Laufwerk besitzt. Bitte fügen Sie ein solches auf der Seite Massenspeicher der Einstellungen für die virtuelle Maschine hinzu.',

/* USB devices */
'USB Device' => 'USB-Gerät', // USB device name
'USB Attached' => 'angeschlossen', // Is it attached to the VM
'USB Available' => 'verfügbar', // 	Is it available

/* VM List Tooltip
 * %1 replaced with VM Name
 * %2 replaced with VM state
 * %3 replaced with time since state change
 * %4 replaced with session state (locked or unlocked)
 * */
'<nobr>%1</nobr><br /><nobr>%2 since %3</nobr><br /><nobr>Session %4</nobr>' => '<nobr>%1</nobr><br /><nobr>%2 seit %3</nobr><br /><nobr>Session %4</nobr>',
// Session states
'Locked' => 'gesperrt',
'Unlocked' => 'entsperrt',
'Unlocking' => 'wird entsperrt',

/* Operating Systems */
'Other' => 'Anderes/Unbekannt',
'Windows31' => 'Windows 3.1',
'Windows95' => 'Windows 95',
'Windows98' => 'Windows 98',
'WindowsMe' => 'Windows Me',
'WindowsNT4' => 'Windows NT 4',
'Windows2000' => 'Windows 2000',
'WindowsXP' => 'Windows XP',
'WindowsXP_64' => 'Windows XP (64 bit)',
'Windows2003' => 'Windows 2003',
'Windows2003_64' => 'Windows 2003 (64 bit)',
'WindowsVista' => 'Windows Vista',
'WindowsVista_64' => 'Windows Vista (64 bit)',
'Windows2008' => 'Windows 2008',
'Windows2008_64' => 'Windows 2008 (64 bit)',
'Windows7' => 'Windows 7',
'Windows7_64' => 'Windows 7 (64 bit)',
'WindowsNT' => 'Anderes Windows',
'Linux22' => 'Linux 2.2',
'Linux24' => 'Linux 2.4',
'Linux24_64' => 'Linux 2.4 (64 bit)',
'Linux26' => 'Linux 2.6',
'Linux26_64' => 'Linux 2.6 (64 bit)',
'ArchLinux' => 'Arch Linux',
'ArchLinux_64' => 'Arch Linux (64 bit)',
'Debian' => 'Debian',
'Debian_64' => 'Debian (64 bit)',
'OpenSUSE' => 'openSUSE',
'OpenSUSE_64' => 'openSUSE (64 bit)',
'Fedora' => 'Fedora',
'Fedora_64' => 'Fedora (64 bit)',
'Gentoo' => 'Gentoo',
'Gentoo_64' => 'Gentoo (64 bit)',
'Mandriva' => 'Mandriva',
'Mandriva_64' => 'Mandriva (64 bit)',
'RedHat' => 'Red Hat',
'RedHat_64' => 'Red Hat (64 bit)',
'Turbolinux' => 'Turbolinux',
'Ubuntu' => 'Ubuntu',
'Ubuntu_64' => 'Ubuntu (64 bit)',
'Xandros' => 'Xandros',
'Xandros_64' => 'Xandros (64 bit)',
'Linux' => 'Anderes Linux',
'Solaris' => 'Solaris',
'Solaris_64' => 'Solaris (64 bit)',
'OpenSolaris' => 'OpenSolaris',
'OpenSolaris_64' => 'OpenSolaris (64 bit)',
'FreeBSD' => 'FreeBSD',
'FreeBSD_64' => 'FreeBSD (64 bit)',
'OpenBSD' => 'OpenBSD',
'OpenBSD_64' => 'OpenBSD (64 bit)',
'NetBSD' => 'NetBSD',
'NetBSD_64' => 'NetBSD (64 bit)',
'OS2Warp3' => 'OS/2 Warp 3',
'OS2Warp4' => 'OS/2 Warp 4',
'OS2Warp45' => 'OS/2 Warp 4.5',
'OS2eCS' => 'eComStation',
'OS2' => 'Other OS/2',
'DOS' => 'DOS',
'Netware' => 'Netware',
'MacOS' => 'Mac OS X Server',
'MacOS_64' => 'Mac OS X Server (64 bit)',

);



function trans($item = '') {
	return (@self::$trans[$item] ? @self::$trans[$item] : $item);
}


}
