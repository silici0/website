<table width="540" border="0" cellpadding="2" cellspacing="2">
	<tr>
		<td colspan="2" bgcolor="#FBFBFB" align="center">
			Rafael Cunha - Envio de email
		</td>
	</tr>
	<tr>
		<td width="195" bgcolor="#f4f4f4">
			<font color="#0066cc" size="2" face="Verdana">
				Nome :
			</font>
		</td>
		<td width="295" bgcolor="#f4f4f4">
			<font  size="2" face="Verdana">
				{{ $lead['name'] }}
			</font>
		</td>
	</tr>
	<tr>
		<td width="195" bgcolor="#f4f4f4">
			<font color="#0066cc" size="2" face="Verdana">
				Whatsapp :
			</font>
		</td>
		<td width="295" bgcolor="#f4f4f4">
			<font  size="2" face="Verdana">
				{{ $lead['whatsapp'] }}
			</font>
		</td>
	</tr>
	<tr>
		<td width="195" bgcolor="#f4f4f4">
			<font color="#0066cc" size="2" face="Verdana">
				Mensagem :
			</font>
		</td>
		<td width="295" bgcolor="#f4f4f4">
			<font  size="2" face="Verdana">
				{!! nl2br($lead['msg']) !!}
			</font>
		</td>
	</tr>
</table>